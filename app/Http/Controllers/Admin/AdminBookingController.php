<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view("admin.booking.index", [
            "title" => "Daftar Booking",
            "bookings" => $bookings,
        ]);
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            "status" => "required|in:Pending,Waiting For Payment,Confirmed,Cancelled",
        ]);
        $booking->update($validated);
        return back();
    }
}

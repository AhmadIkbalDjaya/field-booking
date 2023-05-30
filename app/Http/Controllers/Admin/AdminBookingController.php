<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            "status" => "required|in:Pending,Waiting For Payment,Confirmed,Cancelled",
        ]);
        $booking->update($validated);
        return back();
    }
}

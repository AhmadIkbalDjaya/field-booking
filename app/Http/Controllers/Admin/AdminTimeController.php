<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class AdminTimeController extends Controller
{
    public function index()
    {
        return view('admin.time.index', [
            "title" => "Jam Booking",
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "clock" => "required|time",
        ]);
        Time::create($validated);
        return back()->with("success", "Jam Berhasil ditambahkan");
    }

    public function update(Request $request, Time $time)
    {
        $validated = $request->validate([
            "clock" => "required|unique:times,clock",
        ]);
        $time->update($validated);
        return back()->with("success", "Jam Berhasil diperbaharui");
    }

    public function destroy(Time $time)
    {
        $time->delete();
        return back()->with("success", "Jam Berhasil dihapus");
    }
}

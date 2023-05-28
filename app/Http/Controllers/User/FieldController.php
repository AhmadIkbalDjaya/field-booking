<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        return view('user.field', [
            "title" => "Field Booking",
            "fields" => Field::all(),
        ]);
    }
}

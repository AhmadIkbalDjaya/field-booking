<?php

namespace App\Http\Controllers\Admin;

use App\Models\Field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminFieldController extends Controller
{
    public function index()
    {
        return view("admin.field.index", [
            "title" => "Lapangan",
        ]);
    }

    public function create()
    {
        return view("admin.field.create", [
            "title" => "Tambah Lapangan",
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "image" => "required|image|mimes:png,jpg,jpeg",
            "description" => "required|string",
            "rental_price" => "required|numeric|min:0",
        ]);
        $validated["image"] = $request->file("image")->store('field');
        Field::create($validated);
        return redirect()->route('admin.field.index')->with("success", "Lapangan Berhasil ditambahkan");
    }

    public function show(Field $field)
    {
        return view("admin.field.show", [
            "title" => "Detail Lapangan",
            "field" => $field,
        ]);
    }

    public function edit(Field $field)
    {
        return view("admin.field.edit", [
            "title" => "Edit Lapangan",
            "field" => $field,
        ]);
    }

    public function update(Request $request, Field $field)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "image" => "nullable|image|mimes:png,jpg,jpeg",
            "description" => "required|string",
            "rental_price" => "required|numeric|min:0",
        ]);

        if($request->file("image")){
            Storage::delete($field->image);
            $validated["image"] = $request->file('image')->store('field');
        }
        $field->update($validated);
        return redirect()->route('admin.field.index')->with("Data Lapangan Berhasil Diperbarui");
    }

    public function destroy(Field $field)
    {
        Storage::delete($field->image);
        $field->delete();
        return back()->with("success", "Lapangan Berhasil Dihapus");
    }


}

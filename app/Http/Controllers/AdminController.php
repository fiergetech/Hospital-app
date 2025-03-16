<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new Doctor;
        $image = $request->file;
        $image_name = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('doctorimage', $image_name);
        $doctor->image = $image_name;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->spesialis = $request->spesialis;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message', 'Dokter berhasil ditambahkan');
    }
}

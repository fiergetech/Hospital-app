<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id())
        {
            if (Auth::user()->user_type=='0')
            {
                $doctor = doctor::all(); 
                return view('user.home', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id())
        {
            return redirect('/home');
        }
        
        else
        {
        $doctor = doctor::all();

        return view('user.home', compact('doctor'));        
    }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if (Auth::id())
        {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Reservasi berhasil dikirim');
    }
}

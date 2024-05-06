<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function user_management()
    {
        return view('components.user_management');
    }
    public function technician()
    {
        return view('components.technician');
    }
    public function add_technician()
    {
        return view('components.add_technician');
    }
    public function technician_profile()
    {
        return view('components.technician_profile');
    }
    public function booking()
    {
        return view('components.booking');
    }

}

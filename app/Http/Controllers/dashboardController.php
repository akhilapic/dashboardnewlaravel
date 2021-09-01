<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $title ="Dashboard";
        return view("admin/dashboard",compact('title'));
    }
}

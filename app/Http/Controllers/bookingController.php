<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function bookinglist()
    {
        return view("admin.booking.bookinglist");
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chartflot()
    {
        return view("admin/chat/chartflot");
    }

    public function chartmorris()
    {
        return view("admin/chat/chartmorris");
    }

    public function chartchartjs()
    {
        return view("admin/chat/chartchartjs");
    }

    public function chartchartist()
    {
        return view("admin/chat/chartchartist");
    }

    public function chartsparkline()
    {
        return view("admin/chat/chartsparkline");
    }
    public function chartpeity()
    {
        return view("admin/chat/chartpeity");
    }

}

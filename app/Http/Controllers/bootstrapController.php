<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bootstrapController extends Controller
{
    public function accordion()
    {
        return view("admin/bootstrap/accordion");
    }
    public function alert()
    {
        return view("admin/bootstrap/alert");
    }
    public function badge()
    {
        return view("admin/bootstrap/badge");
    }
    public function button()
    {
        return view("admin/bootstrap/button");
    }
    public function modal()
    {
        return view("admin/bootstrap/modal");
    }
    public function buttongroup()
    {
        return view("admin/bootstrap/buttongroup");
    }
    public function listgroup()
    {
        return view("admin/bootstrap/listgroup");
    }
    
    public function cards()
    {
        return view("admin/bootstrap/cards");
    }

    public function carousel()
    {
        return view("admin/bootstrap/carousel");
    }
    
    public function dropdown()
    {
        return view("admin/bootstrap/dropdown");
    }
    public function popover()
    {
        return view("admin/bootstrap/popover");
    }
    public function progressbar()
    {
        return view("admin/bootstrap/progressbar");
    }
    public function tab()
    {
        return view("admin/bootstrap/tab");
    }
    public function typography()
    {
        return view("admin/bootstrap/typography");
    }
    public function pagination()
    {
        return view("admin/bootstrap/pagination");
    }
    public function grid()
    {
        return view("admin/bootstrap/grid");
    }
}

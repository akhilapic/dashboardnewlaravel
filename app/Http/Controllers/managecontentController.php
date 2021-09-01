<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managecontentController extends Controller
{
    public function aboutus()
    {
        return view("admin/managecontent/aboutus");
    }

    public function contenctus()
    {
        return view("admin/managecontent/contenctus");
    }
    public function home()
    {
        return view("admin/managecontent/home");
    }
   
}

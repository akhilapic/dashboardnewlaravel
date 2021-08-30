<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class widgetController extends Controller
{
    public function widgetbasic()
    {
        return view("admin/widge/widgetbasic");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artistController extends Controller
{
    public function adminartistlist()
    {
        return view("admin/artist/artistlist");
    }
}

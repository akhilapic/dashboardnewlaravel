<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function myprofile()
    {
     return view("admin/myprofile");   
    }
    public function logout()
    {
     //return view("admin/form/formwizard");   
    }
   
}

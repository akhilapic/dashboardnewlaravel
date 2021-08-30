<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function formelement()
    {
     return view("admin/form/formelement");   
    }
    public function formwizard()
    {
     return view("admin/form/formwizard");   
    }
    public function formckeditor()
    {
     return view("admin/form/formckeditor");   
    }
    public function formpickers()
    {
     return view("admin/form/formpickers");   
    }
    public function formvalidation()
    {
     return view("admin/form/formvalidation");   
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ucController extends Controller
{
    public function select2()
    {
        return view("admin/plugins/select2");
    }

    public function nestable()
    {
        return view("admin/plugins/nestable");
    }
    public function nouislider()
    {
        return view("admin/plugins/nouislider");
    }
    public function sweetalert()
    {
        return view("admin/plugins/sweetalert");
    }
    public function toastr()
    {
        return view("admin/plugins/toastr");
    }
    public function mapjqvmap()
    {
        return view("admin/plugins/mapjqvmap");
    }
    public function lightgallery()
    {
        return view("admin/plugins/lightgallery");
    }
}

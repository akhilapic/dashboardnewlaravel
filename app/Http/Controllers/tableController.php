<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    public function tablebootstrapbasic()
    {
        return view("admin/table/tablebootstrapbasic");
    }

    public function tabledatatablebasic()
    {
        return view("admin/table/tabledatatablebasic");
    }
}

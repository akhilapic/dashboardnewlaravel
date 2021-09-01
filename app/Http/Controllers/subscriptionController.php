<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subscriptionController extends Controller
{
    public function subscription()
    {
        return view("admin/subscription/subscription");
    }
    public function subscribers()
    {
        return view("admin/subscription/subscribers");
    }
    public function payments()
    {
        return view("admin/subscription/payments");
    }
}
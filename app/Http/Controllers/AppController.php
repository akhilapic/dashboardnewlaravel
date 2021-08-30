<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function appprofile()
    {
        return view('/admin/app/appprofile');
    }
    public function postdetails()
    {
        return view('/admin/app/postdetails');
    }

    public function emailinbox()
    {
        return view("/admin/app/email/emailindex");
    }
    public function emailcompose()
    {
        return view("/admin/app/email/emailcompose");
    }
    public function emailread()
    {
        return view("/admin/app/email/emailread");
    }

    public function appcalender()
    {
        return view("/admin/app/appcalender");
    }
    public function ecomproductgrid()
    {
        return view("/admin/app/shop/ecomproductgrid");
    }

    public function ecomproductlist()
    {
        return view("/admin/app/shop/ecomproductlist");
    }

    public function ecomproductdetail()
    {
        return view("/admin/app/shop/ecomproductdetail");
    }

    public function ecomproductorder()
    {
        return view("/admin/app/shop/ecomproductorder");
    }

    public function ecomcheckout()
    {
        return view("/admin/app/shop/ecomcheckout");
    }

    public function ecominvoice()
    {
        return view("/admin/app/shop/ecominvoice");
    }

    public function ecomcustomers()
    {
        return view('/admin/app/shop/ecomcustomers');
    }
}
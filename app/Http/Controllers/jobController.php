<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    public function joblist()
    {
        return view("admin.job.joblist");
    }

    public function addjob()
    {
        return view("admin.job.addjob");
    }
    public function jobspage()
    {
        return view("admin.job.jobspage");
    }

    public function jobview()
    {
        return view("admin.job.jobview");
    }

    public function jobapplication()
    {
        return view("admin.job.jobapplication");
    }

 public function applyjob()
    {
return view("admin.job.applyjob");
    }
    public function newjob()
    {
        return view("admin.job.newjob");
    }

    public function userprofile()
    {
        return view("admin.job.userprofile");
    }
}
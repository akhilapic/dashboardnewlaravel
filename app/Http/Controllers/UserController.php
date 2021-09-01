<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auser;
class UserController extends Controller
{
    public function newuser()
    {
        return view('admin/user/newuser');
    }
    
    public function userlist()
    {
        return view('admin/user/userlist');
    }

    public function checkuseremail(Request $request)
    {
        $email = $request->input("email");
        $userData = Auser::where('email', $email)->first();
        
        if(is_null($userData))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function checkuserphone(Request $request)
    {
        $phone = $request->input("phone");
        $userData = Auser::where('phone', $phone)->first();
        
        if(is_null($userData))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function saveuser(Request $request)
    {
        dd($request);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Superadmin;
class superadminController extends Controller
{
    public function logincheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result = Superadmin::all();
        dd($result);
    }
}

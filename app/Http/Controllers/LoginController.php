<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    function login()
    {
        return view('login');
    }

    function checkCredentials(Request $request)
    {
        $user = ['admin@gmail.com','password'];
        if($user[0] == $request->email)
        {
            if($user[1] == $request->password)
            {
                return redirect('/movies-index');
            }else{
                return back();
            }
        }else{
            return back();
        }
    }

}

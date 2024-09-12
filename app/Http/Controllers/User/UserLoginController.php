<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserLoginController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }

    public function chickLogin(Request $request)
    {
 
        if(auth()->guard('web')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {   
            return redirect()->route('home.user');
        }//end if 
        
        // return $request;
        toastr()->error('رقم الهاتف او كلمه المرور خطأ','خطأ');
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.login');
    }//end of logout



}

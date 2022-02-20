<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function register()
    {
        return view('student.form.registration');

    }
    public function registrationSubmit(Request $req)
    {

        $req->validate(
            //compulsory parameter
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'username'=>'required|min:3|max:10',
                'password'=>'required',
                'confirmPassword'=>'required|same:password',
                'email'=>'required|email'
            ],
            //optional parameter
            [
                'username.required'=>'Please provide the usrname',
                'username.max'=>'username must not exceed 10 characters',
                'confirmPassword.same'=>'Password must be same'
            ]
        );

        return "<h1> Registration Submitted with $req->username</h1>";

    }

    public function registration(){
        return view('student.form.registration');
    }
}

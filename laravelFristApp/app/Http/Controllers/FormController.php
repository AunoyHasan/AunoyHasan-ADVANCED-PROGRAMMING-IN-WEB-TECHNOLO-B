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
            [
                'username'=>'required|min:3|max:10',
                'password'=>'required',
                'confirmPassword'=>'confirmPassword',
                'email'=>'required|email'
            ]
        );

        return "<h1> Registration Submitted with $req->username</h1>";

    }

    public function registration(){
        return view('student.form.registration');
    }
}

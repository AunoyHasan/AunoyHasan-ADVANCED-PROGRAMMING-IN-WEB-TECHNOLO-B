<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function contact(){
        return view('student.cv.contact');
    }
    public function education(){
        return view('student.cv.education');
    }
    public function project(){
        return view('student.cv.project');
    }
    
}

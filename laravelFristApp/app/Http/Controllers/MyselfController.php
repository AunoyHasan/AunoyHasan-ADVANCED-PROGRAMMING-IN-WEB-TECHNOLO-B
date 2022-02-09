<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyselfController extends Controller
{
    //
    public function friend(){
        $friends = ["Rakib", "Amit", "Adnan", "Rifat"];
        return view('student.myself.friend')->with('friends', $friends);
    }
    public function hobby(){
        return view('student.myself.hobby');
    }
}

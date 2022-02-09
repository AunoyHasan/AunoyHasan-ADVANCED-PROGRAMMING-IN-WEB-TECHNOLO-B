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
        $hobbies = array("num1"=>"sleep", "num2"=>"Football", "num3"=>"Cricket", "num4" => "Travel");
        $hobbies = (object)$hobbies;
        return var_dump($hobbies);
        //return view('student.myself.hobby');
    }
}

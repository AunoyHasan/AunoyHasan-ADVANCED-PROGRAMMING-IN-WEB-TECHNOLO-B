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
    
    //associative array to object
    public function hobby(){
        $hobbies = array("num1"=>"sleep", "num2"=>"Football", "num3"=>"Cricket", "num4" => "Travel");
        $hobbies = (object)$hobbies;
        return var_dump($hobbies);
        //return view('student.myself.hobby');
    }

    //mannual array to object
    public function fan(){
        $fans = array();
        for($i=0; $i<10; $i++){
            $players = array(
                "number" => $i+1,
                "football" => "Messi".($i+1) ,
                "club" => "Man City",
                "cricket" => "A B Dvillias"
            );
            $players = (object)$players;
            $fans[] = $players;
        }
        return view('student.myself.fan')->with('fans', $fans);
    }

    public function dynamicRouting($name, $id){
        return view('student.myself.dynamicRouting')
        ->with('name', $name)
        ->with('id', $id);
    }

    public function namedRouting(){
        return view('student.myself.namedRouting');
    }

}

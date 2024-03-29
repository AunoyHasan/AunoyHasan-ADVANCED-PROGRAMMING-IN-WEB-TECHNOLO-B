<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function list(){
        /*
        $students = array();
        for($i=0;$i<10;$i++){
            $student = array(
                "id" => $i+1,
                "name" =>"Student ".($i+1),
                "dept" => "CS"
            );
            $student = (object)$student;
            $students[] = $student;
        }
        */
        $students = Student::all(); //select * from students and also converts it into collection of student oobject
        return view('student.list')->with('students',$students);
    }

    public function create(){
        return view('student.create');
    }

    public function details(Request $req){
        return view('student.get')
        ->with('name',$req->name)
        ->with('id',$req->id - 839)
        ->with('courses',[]);;
    }

    public function get(){
        $name = "Tanvir Ahmed";
        $id = "123";
        $courses = ["Pl1","pl2","DS","Algo","OOp1","OOP2","WT","ATP2","ATP3"];
        return view('student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('courses',$courses);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //
    public function allStudent(){
        $students = Student::all();
        //return $students;

        return response()->json($students);
        //return view('allstudent')->with('students', $students);
    }

    public function addStudent(Request $req){
        $st = new Student();
        $st->name = $req->name;
        $st->username = $req->username;
        $st->password = "12345";
        $st->email = $req->email;
        $st->created_at="2022-02-22 17:05:17";
        $st->updated_at="2022-02-22 17:05:17";
        if($st->save()){
            return response->json(["msg"=>"Added Successfully"]);
        }
        return response->json(["msg"=>"Unsuccessfull"]);
        //return response->json($st);
    }

    public function singleStudent(Request $req){
        $student = Student::where('id',$req->id)->first();
        return view('singlestudent')->with('student', $student);
    }

    public function studentDelete(Request $req){
        $student = Student::where('id',$req->id)->delete();
       // session()->flash('msg1','Student deleted successfully!');
        //return redirect ()->route ('student');
    }

    public function studentEdit(){
        //return view();
    }
}

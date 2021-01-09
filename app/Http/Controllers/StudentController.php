<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    // index page load and index page all data show
    public function index(){
        $Student = Student::latest() -> get ();
        return view('student.index', [
           'all_student' => $Student,
        ]);
    }

    // create page load 
    public function create(){
        return view('student.create');
    }


    // create page all data insert 
    public function store(Request $request){
        $this -> validate($request, [
            'email' => 'required | unique:students',
            'cell' => 'required | unique:students',
            'username' => 'required | unique:students',
            'age' => 'required | integer' ,
            'password' => 'required | max: 10 | min : 6',

        ],
    [
        'name.max' => 'Name field must be in lower 20 charecters',
        'name.min' => 'Name field must be in upper 2 charecters',
        'email.required' => 'Email fields are required',
        'email.unique' => 'This email already take space in our database, try another one!',
    ]);

        Student::create([
            'name'  => $request -> name,
            'email'  => $request -> email,
            'cell'  => $request -> cell,
            'username' => $request -> username,
            'password'  => password_hash($request -> name , PASSWORD_DEFAULT),
            'age'  => $request -> age,
        ]);
        return redirect() -> back() -> with('success' , 'Student Added Successfully!');
    }


    // profile page all data show 
    public function show($id){
        $single_student = Student::find($id);
        return view('student.show', [
            'single_student'  => $single_student,
        ]);
    }


    // single data delete
    public function delete($id){
       $delete_data =  Student::find($id);
       $delete_data -> delete();
       return redirect() -> back() -> with('success' , 'Student deleted Successfully!');

    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // index page load and index page all data show
    public function index(){
        $all_teacher = Teacher::latest() -> get ();
        return view('teacher.index',[
            'all_teacher' => $all_teacher,
        ]);
    }

    // create page load 
    public function create(){
        return view('teacher.create');

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

        Teacher::create([
        'name'  => $request -> name,
        'email'  => $request -> email,
        'cell'  => $request -> cell,
        'username' => $request -> username,
        'password'  => password_hash($request -> name , PASSWORD_DEFAULT),
        'age'  => $request -> age,
       ]);
       return redirect() -> back() -> with('success' , 'Teacher Added Successfully');
    }


    // profile page all data show 
    public function show($id){
        $single_teacher = Teacher::find($id);
        return view('teacher.show',[
            'single_teacher' => $single_teacher,
        ]);
    }


    // single data delete
    public function delete($id){
       $delete_data =  Teacher::find($id);
       $delete_data -> delete();
       return redirect() -> back() -> with('success' , 'Teacher deleted Successfully!');

    }


}

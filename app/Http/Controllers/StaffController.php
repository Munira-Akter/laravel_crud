<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    // index page load and index page all data show
    public function index(){
        $all_staff = Staff::latest() -> get ();
        return view('staff.index',[
            'all_staff' => $all_staff,
        ]);
    }

    // create page load 
    public function create(){
        return view('staff.create');
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

       Staff::create([
            'name'  => $request -> name,
            'email'  => $request -> email,
            'cell'  => $request -> cell,
            'username' => $request -> username,
            'password'  => password_hash($request -> name , PASSWORD_DEFAULT),
            'age'  => $request -> age,
       ]);
       return redirect() -> back() -> with('success' , 'Staff Added successfully!');
    }


    // profile page all data show 
    public function show($id){
       $single_staff =  Staff::find($id);
        return view('staff.show',[
            'single_staff' => $single_staff,
        ]);
    }


    // single data delete
    public function delete($id){
        $delete_staff =  Staff::find($id);
        $delete_staff -> delete();
        return redirect() -> back() -> with('success' , 'Staff Deleted Successfully!');
    }


}

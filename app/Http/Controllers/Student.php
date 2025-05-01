<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function showform(){
        return view('students');
    }

    public function handleform(Request $request){

 $validation = $request->validate([
      
    'name'=>'required',
    'email'=>'required',
    'phone'=>'required',
    'dob'=>'required',
    'course'=>'required',
 ]);

 return view('thankyou', ['name' => $request->input('name')]);


    }
}

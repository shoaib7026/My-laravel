<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;

class AddUserscontroller extends Controller
{


    public function showform(){
        return view('Adduser');

    }

    public function adduser(Request $request){

        $request->validate([
'uname'=>'required',
'uemail'=>'required|unique:add_users,User_Email',
'upassword'=>'required',
'uphone'=> ['required', 'regex:/^03[0-9]{9}$/'],
        ]);

        $user = new AddUser();

        $user->User_Name = $request->uname;
        $user->User_Email = $request->uemail;
        $user->User_Password = $request->upassword;
        $user->User_Phone = $request->uphone;

        $user->save();
        

        return back()->with('success','User Add Succesfully');







    }
}

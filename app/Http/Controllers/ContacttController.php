<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContacttController extends Controller
{
    public function showform(){
        return view('contact');
    }

   public function handleform(Request $request){

$validations = $request->validate([

'name'=>'required',
'email'=>'required',
'message'=>'required ',

]);

Contact::create($request->only(['name', 'email', 'message']));


    $username = $request->input('name');
    $useremial = $request->input('email');
    $usermsg = $request->input('message');

    return " Thank You $username ! We Recived Your Message We Will Get back To You Soon!";



   }

}

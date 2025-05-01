<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){

        $message = 'Welcome To Laravel Boss!';

        return view ('home' ,compact('message'));
    }

    public function second(){
        $message = 'This is second function on controler';

        return view('home', compact('message'));
    }

    public function greet($name){

        return "Hello, $name Welcome To Laravel World!";
    }


    // is function me humne assoc array me user rakhy he 5 or url k through hr aeyk ko alag alag dkhaya he 
    // Mean url me jo name pass hogaa wo yaha check kiya jeyga or phir usi user ka data show hoga
    public function UserProfile($name){

        $users = [
            'ali' =>['age'=>22,'city'=>'Lahore','hobby'=>'Cricket'],
            'shoaib' => ['age' => 25, 'city' => 'Karachi', 'hobby' => 'Coding'],
            'usman' => ['age' => 28, 'city' => 'Islamabad', 'hobby' => 'Reading'],
            'ahmed' => ['age' => 30, 'city' => 'Multan', 'hobby' => 'Gaming'],
            'faizan' => ['age' => 20, 'city' => 'Peshawar', 'hobby' => 'Photography'],

        ];

        $name = strtolower($name);

        if(array_key_exists($name,$users)){

            $user = $users [$name];

           $age =$user['age'];
           $city = $user['city'];
           $hobby = $user['hobby'];
           $name = ucfirst($name);

           return view('userprofile',compact('name','age','city','hobby'));

        }
        else{
            return "User Not Found";
        }

    }

}
?>
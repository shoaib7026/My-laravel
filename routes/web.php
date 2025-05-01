<?php

use App\Http\Controllers\Student;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContacttController;
use App\Http\Controllers\Students;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return 'Yeh About Page he ';
});

// Route::get('st' ,function (){

//     return view('home');

// });

Route::get('welcome' , [HomeController::class, 'show']);



Route::get('second', [HomeController::class, 'second']);


Route::get('greet/{name}', [HomeController::class, 'greet']);


Route::get('user/{name}', [HomeController::class, 'UserProfile']);

// ye product wala contorler he 
Route::get('product/{pr}',[ProductController::class, 'products']);

// ye contact wala controle he 
Route::get('/contact', [ContacttController::class, 'showForm']);
Route::post('/contact', [ContacttController::class, 'handleForm']);


// yaha se students wala data insert wala shoro he 

Route::get('students', [Student::class, 'showform']);
Route::post('students', [Student::class, 'handleform']);

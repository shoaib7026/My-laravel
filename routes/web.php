<?php

use App\Http\Controllers\AddProducts;
use App\Http\Controllers\AddUserscontroller;
use App\Models\Addproduct;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return 'Yeh About Page he ';
});

// Add product wala kam yaha se start he 

Route::get('addproduct', [AddProducts::class,'addproductform']);
Route::post('addproduct', [AddProducts::class, 'handleaddproduct']);

// Add product wala kam yaha pr khtm 


// yaha se adduser wala shoro he without fillable 

Route::get('adduser',[AddUserscontroller::class ,'showform']);
Route::post('adduser', [AddUserscontroller::class, 'adduser']);

// yaha se adduser wala khatm he without fillable 


// yaha se product view wala shoro he 
Route::get('products',[AddProducts::class,'viewproducts']);

// yaha se product edit  wala shoro he jo form show kreyga click hony pr  

Route::get('Editproduct/{id}',[AddProducts::class,'editproduct']);

// yaha se update wala shoro he product update hoga ye url form ka action he 

Route::post('updateproduct/{id}',[Addproducts::class,'updateproduct']);

// delete product wala yaha se shoro he 

Route::get('Deleteproduct/{id}',[Addproducts::class,'deleteproduct']);

// Route::get('Deleteproduct/{id}',[Addproducts::class,'viewproducts']);

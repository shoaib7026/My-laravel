<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addproduct;


class AddProducts extends Controller
{
   
public function addproductform(){
    return view('addproduct');
}

public function handleaddproduct(Request $request){

   $validated = $request->validate([
'product_name'=>'required',
'product_description'=>'required',
'product_price'=>'required',
'product_quantity'=>'required',
'product_category'=>'required',
    ]);

    Addproduct::create($validated);

    
    return back()->with('success', 'Product added successfully!');

}

public function viewproducts(){

    $allProducts = Addproduct::all();

    return view('Viewproducts',compact('allProducts'));

}


public function editproduct($id){

$product = Addproduct::findOrFail($id);

return view('Editproduct',compact('product'));

}

public function updateproduct(Request  $request ,$id ){

    $request->validate([
'product_name'=>'required',
'product_description'=>'required',
'product_price'=>'required',
'product_quantity'=>'required',
'product_category'=>'required',

    ]);

    $update_product = Addproduct::findOrFail($id);

   $update_product->update($request->all());



 return redirect('products')->with('success', 'Product updated successfully!');


    





}


public function deleteproduct($id){

$deleteproduct = Addproduct::findOrFail($id);

$deleteproduct->delete();


return redirect('products')->with('success', 'Krdeya delete Product 😕');


}


}

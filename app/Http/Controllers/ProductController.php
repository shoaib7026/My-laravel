<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function products($pr){

$products = [
    'keyboard' => ['price' => 1200, 'brand' => 'Logitech', 'category' => 'Accessories'],
    'mouse' => ['price' => 800, 'brand' => 'HP', 'category' => 'Accessories'],
    'monitor' => ['price' => 18000, 'brand' => 'Dell', 'category' => 'Display'],
    'laptop' => ['price' => 90000, 'brand' => 'Lenovo', 'category' => 'Computers'],

];
 $name = strtolower($pr);
if(array_key_exists($pr ,$products  )){

    $product = $products[$pr];

    return view('product', compact('pr','product' ));
    


}
else{
    return "Product Not Found! ";
}


    }
}

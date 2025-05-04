<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{


    protected $fillable = ['product_name','product_description', 'product_price', 'product_quantity', 'product_category'];

}

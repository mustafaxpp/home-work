<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    function Brands(){
        return $this->hasMany(Brand::class);
    }
    function Prducts(){
        return $this->hasMany(Product::class);
    }
};



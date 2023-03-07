<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $filltable=['name', 'description', 'price', 'image', 'quantity', 'categoryID'];

    public function category(){
        return $this->belongTo('App\Category');

    }
}

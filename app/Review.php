<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['users_id','product_id','rating','message'];

    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }
    public function product(){
        return $this->belongsTo(Products_model::class,'product_id','id');
    }
    
}

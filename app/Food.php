<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name', 'description', 'type' , 'cuisine' , 'price', 'photo_path'
    ];

    public function order_process(){
        return $this->belongsTo('App\OrderProcess');
    }

    public function order_history(){
        return $this->belongsTo('App\OrderHistory');
    }

}

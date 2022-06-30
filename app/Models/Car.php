<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mileage',
        'model',
        'color',
        'fuel',
        'type',
        'price',
        'image_path',
        'user_id',
    ];


    public function user(){

       return $this->belongsTo(User::class,'user_id');
    }

}

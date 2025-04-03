<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Product extends Model
{
   
    protected $fillable = [
        'name', 'description', 'price'
    ];
}
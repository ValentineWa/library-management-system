<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
   protected $table='pages';
     protected $fillable = [
        'name', 'description', 'slug'
    ];
}

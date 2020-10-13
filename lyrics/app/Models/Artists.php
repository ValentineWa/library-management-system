<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
	protected $table='artists';
     protected $fillable = [
        'name', 'slug', 'bio', 'picture'
    ];

}
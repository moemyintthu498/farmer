<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
    'name', 'photo', 'description', 'power','price',
  ];

}

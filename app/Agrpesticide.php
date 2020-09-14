<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrpesticide extends Model
{
       protected $fillable = [
    'name','photo', 'price', 'disease', 'expiredate','crop_id',
  ];
  public function crop($value=''){
    	return $this->hasMany('App\Crop');
    }
}

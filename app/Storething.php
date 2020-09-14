<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storething extends Model
{
     protected $fillable = [
    'crop_id','buyprice','qty',
  ];
    public function crop($value=''){
    	return $this->belongsTo('App\Crop');
    }
}

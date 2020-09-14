<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
    'name', 'photo', 'description', 'soil','season','rainfall','insect',
  ];

  public function pricelists($value=''){
    	return $this->hasMany('App\Pricelist');
    }

    public function agrpesticides($value=''){
    	return $this->belongsTo('App\Agrpesticide');
    }

    public function storethings($value=''){
    	return $this->hasMany('App\Storething');
    }

}

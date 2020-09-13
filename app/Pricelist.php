<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
	  protected $fillable = [
    'pdate', 'ptime', 'sellprice', 'buyprice','crop_id',
  ];
    public function crop($value=''){
    	return $this->belongsTo('App\Crop');
    }

}

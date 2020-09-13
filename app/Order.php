<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'voucherno', 'orderdate', 'status','total','user_id',
  ];

  public function storethings($value='')
  {
    return $this->belongsToMany('App\Storething','order_detail')
                ->withPivot('qty')
                ->withTimestamps();
  }

   public function user($value=''){
    	return $this->belongsTo('App\User');
    }
}

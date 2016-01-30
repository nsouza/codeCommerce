<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillabe = [
    	'user_id',
    	'total',
    	'status'
    ];
	
	public function items() {
    	return $this->hasMany('CodeCommerce\OrderItem');
    	
    }
    
    public function user() {
    	return $this->belongsTo('CodeCommerce\User');
    }
}

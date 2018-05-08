<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    public function customer(){
    	return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsToMany('App\Product', 'bill_details', 'bill_id', 'product_id');
    } 
}

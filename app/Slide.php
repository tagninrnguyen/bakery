<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';

    public function image(){
    	return $this->morphMany('App\Image', 'imageable');
    }    
}

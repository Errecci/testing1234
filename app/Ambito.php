<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambito extends Model
{
    public function works() 
    { 
        return $this->hasMany('App\Work');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $fillable = array('id','titolo','url_lavoro','colonna','ordinamento','work_id');
//	protected $guarded = ['id'];


    public function work()
    { 
        return $this->belongTo('App\Work');
	}

}

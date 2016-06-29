<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
   
    public function ambito()
    {
        return $this->belongsTo('App\Ambito');
    }

    public function tipologie()
    {
        return $this->belongsTo('App\Tipologie');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

/*
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
*/
}

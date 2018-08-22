<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function visitors(){
    	return $this->belongsToMany('App\Registration');

    }
}

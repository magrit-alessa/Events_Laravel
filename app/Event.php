<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Registration;

class Event extends Model
{
    public function visitors(){
    	return $this->hasMany('App\Registration')->with('ticket');
  
}
}
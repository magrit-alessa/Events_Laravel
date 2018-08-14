<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Registration;

class Event extends Model
{
    public function Visitor(){
    	return $this->hasOne('App\Registration', 'event_id' );
  
}
}
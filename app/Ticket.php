<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function Tipes(){
    	return $this->hasOne('App\Registration', 'ticket_id' );

    }
}

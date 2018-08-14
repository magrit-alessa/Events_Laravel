<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    public function Tipes(){
    	return $this->hasOne('App\Registration', 'ticket_id' );

    }
}

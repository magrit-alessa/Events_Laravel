<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Event;

class Registration extends Model
{
    protected $fillable = ['name', 'lastname' ,'email', 'ticket_id', 'event_id'];
}

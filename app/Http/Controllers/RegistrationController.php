<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use App\Registration;
use App\Ticket;


class RegistrationController extends Controller
{
    public function RegistrationForm($id){
    
    $events = Event::all();
    $tickets=Ticket::all();
	return view('registration', compact('events','tickets'));
    }

    public function FormData(){
    	$this->validate(request(),[
            'name'=> 'required|string|min:2',
            'lastname'=> 'required|string|min:2',
            'email'=> 'required|string|email|max:255',
            'ticket_id'=> 'required',
            'event_id.*.email'=> 'unique:registrations'
    		]);
    	Registration::create(
              request(['name', 'lastname' ,'email', 'ticket_id', 'event_id'])
    		);

    	return redirect('/');
    }
}

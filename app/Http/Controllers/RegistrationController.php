<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use App\Registration;
use App\TicketType;


class RegistrationController extends Controller
{
    public function RegistrationForm($id){
    $event_ids = Event::all() ;
    $tickets=TicketType::all();
	return view('registration', compact('event_ids','tickets'));
    }

    public function FormData(){
    	$this->validate(request(),[
            'name'=> 'required|string|min:2',
            'lastname'=> 'required|string|min:2',
            'email'=> 'required|string|email|max:255|unique:registrations',
            
    		]);
    	Registration::create(
              request(['name', 'lastname' ,'email', 'ticket_id', 'event_id'])
    		);

    	return redirect('/');
    }
}

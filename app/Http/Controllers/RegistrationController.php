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
    $event_id= $id;
	return view('registration', compact('events','tickets','event_id'));
    }

    public function FormData(){
        // if(Registration::select('event_id','email')===request(['event_id','email'])){
        //    return errors();
        // }

        // $unique = Registration::where('event_id','email')->exists();
        // $request = $this->getRequest()->getParam('id');
        
    	$this->validate(request(),[
            'name'=> 'required|string|min:2',
            'lastname'=> 'required|string|min:2',
            'email'=> 'required|string|email|max:255',
            'ticket_id'=> 'required',
            // 'email.*.event_id'=> 'unique:registrations'
    		]);
    
        
    	Registration::create(
              request(['name', 'lastname' ,'email', 'ticket_id', 'event_id'])
    		);

    	return redirect('/');
    }
}

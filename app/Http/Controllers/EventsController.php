<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Event;
use App\Registration;


class EventsController extends Controller
{
    public function Events(){
     $events= Event::all();
      return view('events', compact('events'));
    }

     public function Visitors($id){
     $visitors = Event::find($id)->visitors;
     
     // dd($visitors);
      return view('visitors', compact('visitors'));
    }
}

@extends('layouts.app')


@section('content')
 <div class="py-5 text-center">
 	<h2>Please fill in the attached Event Registration Form</h2>
 </div>

      @if(count($errors))
   <div class="form-group">
   	<div class="alert alert-danger">
   		<ul>
   			@foreach($errors->all() as $error)
   			<li>{{$error}}</li>
   			@endforeach
   		</ul>
   	</div>
   </div>
   @endif

 	<form action="/formdata"  method="post">
 		{{csrf_field()}}
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text"  name="name"class="form-control" id="firstName" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text"  name="lastname" class="form-control" id="lastName">
              </div>
            </div>




            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
                
                <label for="title">Event</label>
                <select name="event_id" class="custom-select d-block w-100" id="title" required="">
                    @foreach($events as $event)
                    <option value="{{$event->id}}">{{$event->title}}</option>
                    @endforeach
                </select>
                
            </div>

            <h4 class="mb-3">Ticket Type</h4>
            @foreach($tickets as $ticket)
               <div class="p-3 mb-3 bg-light rounded">
                  <div class="custom-control custom-radio">
                  	<input id="{{$ticket->id}}" name="ticket_id" type="radio" class="custom-control-input" value="{{$ticket->id}}">
                  	<label class="custom-control-label" for="{{$ticket->id}}">{{$ticket->type}}</label>
                  	<div class="p-3 mb-3 bg-light rounded"> {{$ticket->description}} 
                       <h4 class="pricing-card"> $ {{$ticket->price}}.00 </h4>
                  	</div>	
                 </div>
               </div>
            @endforeach 
            <button class="btn btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>		

@endsection

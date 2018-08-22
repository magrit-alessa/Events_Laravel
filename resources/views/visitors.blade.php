@extends('layouts.app')

@section('content')
  <div class="jumbotron p-3 p-md-5 text-white rounded ">
  	<h2 class="display-4 ">Who will be there</h2>	
  </div>
  @if(count($visitors))
  <div class="row mb-5">
  @foreach($visitors as $visitor)
  
   
  <div class="col-md-6">
   <div class="card flex-md-row mb-4 shadow-sm h-md-250">

    <div class="card-body d-flex flex-column align-items-start">
    
     	

   		<strong class="d-inline-block mb-2 text-primary">{{$visitor->created_at}}</strong>
   	    <h4 class="mb-0 text-dark">{{$visitor->name}}  {{$visitor->lastname}}</h3>
   	    <h5 class="card-text pb-6 mb-6 font-italic">{{$visitor->email}}</h5>
     
     <div class="mb-1 text-muted">
       <h6 class="pb-3 mb-4 font-italic border-bottom"> Ticket type: {{$visitor->ticket->type}} </h6>
       <p>{{$visitor->ticket->description}}</p>
     </div>
     </div>
   	</div>
   </div>
 
  @endforeach
 </div> 

 @else
 <h2 class="pb-3 mb-4 font-italic">
   Sorry, no one has registered yet...
 </h2>
 @endif
@endsection
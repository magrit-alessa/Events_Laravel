@extends('layouts.app')

@section('content')
  <div class="jumbotron p-3 p-md-5 text-white rounded ">
  	<h2 class="display-4 ">Who will be there</h2>	
  </div>

  @foreach($visitors as $visitor)
   <div class="col-md-4 flex-row">
   	<div class="card  mb-4 shadow-sm ">
   	<div class="card-body d-flex flex-column align-items-start text-center">
   		<strong class="d-inline-block mb-2 text-primary">{{$visitor->created_at}}</strong>
   	    <h4 class="mb-0 text-dark">{{$visitor->name}}  {{$visitor->lastname}}</h3>
   	    <h5 class="card-text pb-6 mb-6 font-italic">{{$visitor->email}}</h5>
     </div>
     <div class="mb-1 text-muted">
     
     </div>
   	</div>
   </div>

  @endforeach
@endsection
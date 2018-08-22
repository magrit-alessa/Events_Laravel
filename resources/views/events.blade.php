@extends('layouts.app')

@section('content')


<div class="card">
	<div class="card-heading jumbotron text-center">
		<h1 class='jumbotron-heading'>Events</h1> 
	</div>
	<div class="card-body">
		<table class="table table-striped task-table">
			<thead>
				<th>Date</th>
				<th>Events Title</th>
				<th>Who will be there</th>
				<th> </th>
			</thead>
			
				@foreach($events as $event)
				<tr>
				  <td class="table-text">
					<div >{{$event->date}}</div>
				  </td>
				
				  <td class="table-text">
					<div >{{$event->title}}</div>
				  </td>
				
				  <td class="table-text">
					<div ><a href="/visitors/{{$event->id}}">Viev all visitors</a></div>
				  </td>
				
				  <td class="table-text">
					<div> <button class="btn"><a href="/registration/{{$event->id}}" > I wanna go! </a> </button> </div>
				</td>
				</tr>	
				@endforeach
			
		</table>
	</div>
</div>

 @endsection
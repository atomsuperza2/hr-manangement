@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/events/add" class="btn btn-primary">New events</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Events</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Event Name</th>
<th>Event Description</th>
<th>Event Start</th>
<th>Event End</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($events as $event)
    <tr>
      <td>{{ $event->id}}</td>
        <td>{{ $event->event_name}}</td>
        <td>{{$event->event_description}}</td>
        <td>{{$event->eventStart}}</td>
        <td>{{$event->eventEnd}}</td>

        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['events.destroy',$event->id]]) !!}
									<a class="btn btn-primary" href="{{ route('events.edit', $event->id) }}">Edit</a>
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
									{!! Form::close() !!}

          </form>
        </td>
    @endforeach

    </tr>
</div>
</table>
</div>
</div>
</div>
</div>
@endsection

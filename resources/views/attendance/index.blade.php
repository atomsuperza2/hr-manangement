@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/attendance/add" class="btn btn-primary">New Attendance</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Attendance</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Date</th>
<th>Time In</th>
<th>Time out</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($attendances as $attendance)
    <tr>
      <td>{{ $attendance->id}}</td>
        <td>{{$attendance->accountinfo->name}}</td>
        <td>{{$attendance->date}}</td>
        <td>{{$attendance->timeIn}}</td>
        <td>{{$attendance->timeOut}}</td>

        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['attendance.destroy',$attendance->id]]) !!}
									<a class="btn btn-primary" href="{{ route('attendance.edit', $attendance->id) }}">Edit</a>
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

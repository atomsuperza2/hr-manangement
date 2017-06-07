@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/absences/add" class="btn btn-primary">New absences</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Absences</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Leave Type</th>
<th>Date</th>
<th>Reason</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($absencess as $absences)
    <tr>
        <td>{{$absences->id}}</td>
        <td>{{$absences->accountinfo->name}}</td>
        <td>{{$absences->leavetype->leavestype}}</td>
        <td>{{$absences->date}}</td>
        <td>{{$absences->reason}}</td>

        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['absences.destroy',$absences->id]]) !!}
									<a class="btn btn-primary" href="{{ route('absences.edit', $absences->id) }}">Edit</a>
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

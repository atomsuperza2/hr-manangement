
@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/training/add" class="btn btn-primary">New training</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Training</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Trainin Pprogram</th>
<th>Date Start</th>
<th>Time Start</th>
<th>Date End</th>
<th>Time End</th>
<th>Action</th>
</tr>
<div class="container">
  @foreach ($training as $trainings)
    <tr>
      <td>{{ $trainings->id }}</td>
        <td> {{ $trainings->accountinfo->name}}</td>
        <td>{{ $trainings->trainingprogram->trainingP}}</td>
        <td>{{ $trainings->dateStart}}</td>
        <td>{{ $trainings->dateEnd}}</td>
        <td>{{ $trainings->shiftStart}}</td>

        <td>{{ $trainings->shiftEnd}}</td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['training.destroy',$trainings->id]]) !!}
									<a class="btn btn-primary" href="{{ route('training.edit', $trainings->id) }}">Edit</a>
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

@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/holidays/add" class="btn btn-primary">New holidays</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Holidays</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th> Occasion</th>
<th>Date</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($holidays as $holiday)
    <tr>
      <td>{{ $holiday->id}}</td>
        <td>{{$holiday->occasion}}</td>
        <td>{{$holiday->dateHoliday}}</td>


        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['holidays.destroy',$holiday->id]]) !!}
									<a class="btn btn-primary" href="{{ route('holidays.edit', $holiday->id) }}">Edit</a>
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
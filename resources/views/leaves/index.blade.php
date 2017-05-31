
@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/leaves/add" class="btn btn-primary">New leaves</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Leaves</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Leave Type</th>
<th>Date From</th>
<th>Date To</th>
<th>Date Applied</th>
<th>Reason</th>
<th>Action</th>
</tr>
<div class="container">
  @foreach ($leave as $leaves)
    <tr>
      <td>{{ $leaves->id }}</td>
        <td>{{ $leaves->accountinfo->name}}</td>
        <td>{{ $leaves->leavestype->leavestype}}</td>
        <td>{{ $leaves->dateFrom}}</td>
        <td>{{ $leaves->dateTo}}</td>
        <td>{{ $leaves->dateApplied}}</td>
        <td>{{ $leaves->reason}}</td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['leaves.destroy', $leaves->id]]) !!}
									<a class="btn btn-primary" href="{{ route('leaves.edit', $leaves->id) }}">Edit</a>
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

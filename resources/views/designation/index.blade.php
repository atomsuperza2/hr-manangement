
@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/designation/add" class="btn btn-primary">New designation</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Designations</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Designation Name</th>
<th>Department</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($designations as $designation)
    <tr>
      <td>{{ $designation->id}}</td>
        <td>{{ $designation->designationName}}</td>
        <td>{{ $designation->department->departmentName}}</td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['designation.destroy',$designation->id]]) !!}
									<a class="btn btn-primary" href="{{ route('designation.edit', $designation->id) }}">Edit</a>
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

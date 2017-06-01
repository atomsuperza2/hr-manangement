@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/accounts/add" class="btn btn-primary">New accounts</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Account</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
<th>Name</th>
<th>Birthday</th>
<th>Gender</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>EmployeeID</th>
<th>Department</th>
<th>Designation</th>
<th>HiredDate</th>
<th>ExitDate</th>
<th>Salary</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($accounts as $user)
    <tr>
        <td><a href="{{route('accounts.show', $user->id)}}">{{ $user->name}}</a></td>
        <td>{{ $user->birthday}}</td>
        <td>{{ $user->Gender}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->phone}}</td>
        <td>{{ $user->address}}</td>
        <td>{{ $user->employeeID}}</td>
        <td>{{ $user->department->departmentName}}</td>
        <td>{{ $user->designation->designationName}}</td>
        <td>{{ $user->hiredDate}}</td>
        <td>{{ $user->exitDate}}</td>
        <td>{{ $user->salary}}</td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['accounts.destroy',$user->id]]) !!}
									<a class="btn btn-primary" href="{{ route('accounts.edit', $user->id) }}">Edit</a>
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



@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/bankaccount/add" class="btn btn-primary">New bank accounts</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Bank Account</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Account name</th>
<th>Account number</th>
<th>Bank name</th>
<th>Action</th>
</tr>
<div class="container">
  @foreach ($bankaccounts as $bankaccount)
    <tr>
      <td>{{ $bankaccount->id }}</td>
        <td>{{ $bankaccount->accountinfo->name}}</td>
        <td>{{ $bankaccount->account_name}}</td>
        <td>{{ $bankaccount->account_number}}</td>
        <td>{{ $bankaccount->bank_name}}</td>

        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['bankaccount.destroy',$bankaccount->id]]) !!}
									<a class="btn btn-primary" href="{{ route('bankaccount.edit', $bankaccount->id) }}">Edit</a>
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

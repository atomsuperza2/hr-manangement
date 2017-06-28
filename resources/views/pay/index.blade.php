@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/pay/add" class="btn btn-primary">New Pay</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Pay For employee</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>title</th>
<th>Amount</th>

<th>Action</th>
</tr>
<div class="container">
    @foreach ($pays as $pay)
    <tr>
        <td>{{$pay->id}}</td>
        <td>{{$pay->accountinfo->name}}</td>
        <td>{{$pay->title}}</td>
        <td>{{$pay->amount}}</td>


        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['pay.destroy',$pay->id]]) !!}
									<a class="btn btn-primary" href="{{ route('pay.edit', $pay->id) }}">Edit</a>
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

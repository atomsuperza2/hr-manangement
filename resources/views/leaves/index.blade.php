
@extends('layouts.customlayouts')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container form-container">

<div class="col-md-12">
  <ol class="breadcrumb">
    <li class="active">leave</li>
  </ol>
    <div class="panel-regis">
    <div class="heading">Leaves <a href="/leaves/add" class="btn btn-primary "style="float:right;">New leaves</a></div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>

<th>Employee</th>
<th>Leave Type</th>
<th>Date From</th>
<th>Date To</th>
<th>Date Applied</th>
<th>Phone</th>
<th></th>
</tr>
<div class="container">
  @foreach ($leave as $leaves)
    <tr>

        <td>{{ $leaves->accountinfo->name}}</td>
        <td>{{ $leaves->leavestype->leavestype}}</td>
        <td>{{ $leaves->dateFrom}}</td>
        <td>{{ $leaves->dateTo}}</td>
        <td>{{ $leaves->dateApplied}}</td>
        <td>{{ $leaves->phone}}</td>
        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['leaves.destroy', $leaves->id]]) !!}
									<a class="btn btn-warning" href="{{ route('leaves.edit', $leaves->id) }}">Edit</a>
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    <a class="btn btn-info" href="{{ route('leaves.show', $leaves->id) }}">Info</a>
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

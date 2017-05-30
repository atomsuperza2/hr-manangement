@extends('layouts.app')

@section('content')

@if(session()->has('message'))
<h2 class ="alert alert-succress">{{session()->get('message')}}</h2>
@endif

<div class="container">
  <a href="/awards/add" class="btn btn-primary">New awards</a>
<div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">Awards</div>
    <div class="panel-body">
<table class="table table-striped">

  <tr>
    <th>ID</th>
<th>Employee</th>
<th>Awards name</th>
<th>Gift item</th>
<th>Cash price</th>
<th>Action</th>
</tr>
<div class="container">
    @foreach ($awards as $award)
    <tr>
        <td>{{$award->id}}</td>
        <td>{{$award->accountinfo->name}}</td>
        <td>{{$award->awardName}}</td>
        <td>{{$award->giftItem}}</td>
        <td>{{$award->cashPrice}}</td>

        <td>
          {!! Form::open(['method'=>'DELETE', 'route'=>['awards.destroy',$award->id]]) !!}
									<a class="btn btn-primary" href="{{ route('awards.edit', $award->id) }}">Edit</a>
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
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit leave type</div>

                <div class = "panel-body">
                <form class = "" method = "GET" action = "{{route('leavestype.update', $leavestypes->id)}}">

                  <input type= "text" class = "form-control" name="leavestype" value="{{$leavestypes->leavestype}}" placeholder="leave type"><br>

                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

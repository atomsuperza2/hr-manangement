@extends('layouts.customlayouts')

@section('content')



<div class="container form-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-regis">
                <div class="heading">New leave type</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{URL('/leavestype/add')}}">

                  <input type= "text" class = "form-control" name="leavestype" placeholder="leave type"><br>



                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

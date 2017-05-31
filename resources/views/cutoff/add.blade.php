@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Cut-Off</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{URL('/cutoff/add')}}">

                  <input type= "date" class = "form-control" name="dateStart" placeholder="Occasion"><br>
                  <input type= "date" class = "form-control" name="dateEnd" placeholder="Date"><br>


                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

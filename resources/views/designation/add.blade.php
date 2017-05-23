@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Designation</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{URL('/designation/add')}}">

                  <div class="form-group">
                    <!-- {!! Form::label('department_id', 'Department', ['class'=>'control-label col-md-4']) !!} -->
                    {!! Form::select('department_id', $department, null, ['placeholder' => 'Select Department', 'class'=>'form-control']) !!}
                  </div>

                  <input type= "text" class = "form-control" name="designationName" placeholder="Designation"><br>

                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

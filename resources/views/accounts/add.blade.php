@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Question</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{URL('/accounts/add')}}">



                  <input type= "text" class = "form-control" name="firstname" placeholder="First name"><br>

                  <input type= "text" class = "form-control" name="lastname" placeholder="Last name"><br>

                  <input type= "date" class = "form-control" name="birthday" placeholder="Birth day"><br>
                  <input type= "text" class = "form-control" name="Gender" placeholder="Gender"><br>
                  <input type= "text" class = "form-control" name="email" placeholder="E-mail"><br>
                  <input type= "text" class = "form-control" name="phone" placeholder="Phone"><br>
                  <input type= "text" class = "form-control" name="address" placeholder="Address"><br>
                  <input type= "text" class = "form-control" name="employeeID" placeholder="Employee Id"><br>
                  <input type= "date" class = "form-control" name="shiftStart" placeholder="Shift Start"><br>
                  <input type= "date" class = "form-control" name="shiftEnd" placeholder="Shift End"><br>
                  <input type= "date" class = "form-control" name="hiredDate" placeholder="Hired Date"><br>
                  <input type= "date" class = "form-control" name="exitDate" placeholder="Exit Date"><br>
                  <input type= "text" class = "form-control" name="salary" placeholder="Salary"><br>
                  <input type= "text" class = "form-control" name="username" placeholder="Username"><br>
                  <input type= "text" class = "form-control" name="password" placeholder="Password"><br>

                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

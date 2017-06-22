@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Check Attendance</div>
                <div class = "panel-body">
                  <form action="{{ route('accounts.submitAttendance', $accounts->id) }}" method="POST">

                      <label for="Employee" class="col-md-4 control-label">Employee::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="name" type="text" value= "{{$accounts->name}}" disabled>
                      <input class = "form-control" name="user_id" value= "{{$accounts->id}}" type="hidden">
                      </div>

                      <label for="dateStart" class="col-md-4 control-label">Date Start::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="daterangeStart" type="text" value= "{{$cutoff->dateStart}}" disabled>
                      </div>

                      <label for="dateEnd" class="col-md-4 control-label">Date End::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="daterangeEnd" type="text" value= "{{$cutoff->dateEnd}}" disabled>
                      </div>

              <table class="table table-striped">

                <tr>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                </tr>
                <div class="container">
                  @foreach ($ranges as $key => $value)
                  <tr>
                    
                  <td><input class="form-control" name="daterange" value="{{$value}}" disabled/>
                      <input class="form-control" name="date[]" value="{{$value}}" type="hidden"/></td>

                             <td><input class="form-control" name="timeIn[]" type="time" value=""/></td>
                             <td><input class="form-control" name="timeOut[]" type="time" value=""/></td>
                             <!-- <td><input class="form-control" name="a_id" type="text" value="{{ isset($accounts->attendance[$key])? $accounts->attendance[$key]->id:'null' }}"/></td> -->
                    </tr>
                    @endforeach


    </div>
      <?=csrf_field(); ?>
  </table>
  <button type="submit" class="btn btn-primary">save</button>
  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

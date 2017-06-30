@extends('layouts.customlayouts')



@section('content')

<div class="container form-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-regis">
                <div class="heading">Check Attendance</div>
                <div class = "panel-body">
                  <form action="{{ route('checkAttendance.submitAttendance', $accounts->id) }}" method="get">

                      <label for="Employee" class="col-md-4 control-label">Employee::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="name" type="text" value= "{{$accounts->name}}" disabled>
                      <input class = "form-control" name="user_id" value= "{{$accounts->id}}" type="text">
                      </div>

                      <label for="dateStart" class="col-md-4 control-label">Date Start::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="daterangeStart" type="text" value= "{{$cutoff->dateStart}}" disabled>
                      </div>

                      <label for="dateEnd" class="col-md-4 control-label">Date End::</label>
                      <div class="col-md-6">
                      <input class="form-control" name="daterangeEnd" type="text" value= "{{$cutoff->dateEnd}}" disabled>
                      </div>
                      <input class="form-control" name="shiftStart" type="text" value= "{{$accounts->shiftStart}}" >
                      <input class="form-control" name="shiftEnd" type="text" value= "{{$accounts->shiftEnd}}">

              <table class="table table-striped">

                <tr>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                  <th>Hours Worked</th>
                </tr>
                <div class="container">
                  @foreach ($ranges as $date => $value)
                  <?php
                  $correctDate = str_replace('/','-',$value);
                  $attend = $accounts->getAttendanceByDate($correctDate);
                  // echo var_dump($attend->id);
                  ?>
                  <tr>

                  <td><input class="form-control" name="daterange" value="{{$value}}" disabled/>
                      <input class="form-control" name="date[]" value="{{$value}}" type="hidden"/></td>
                          @if( $attend->timeIn == '00:00' || $attend->timeOut == '00:00')
                          <td><input class="form-control" name="timeIn[]" type="time" value="00:00"/></td>
                          <td><input class="form-control" name="timeOut[]" type="time" value="00:00"/></td>
                          @endif

                          @if( $attend->timeIn !== '00:00' || $attend->timeOut !== '00:00' )
                             <td><input class="form-control" name="timeIn[]" type="time" value="{{ $attend->timeIn}}"/></td>
                             <td><input class="form-control" name="timeOut[]" type="time" value="{{ $attend->timeOut}}"/></td>
                           @endif<!-- <td><input class="form-control" name="a_id" type="text" value="{{ isset($accounts->attendance[$date])? $accounts->attendance[$date]->id:'null' }}"/></td> -->
                           <td><input class="form-control" name="hoursWorked[]" type="time" value="{{ $attend->hoursWorked}}" disabled/></td>
                           <td><input class="form-control" name="a_id[]" type="hidden" value="{{ $attend->id}}" /></td>

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

@extends('layouts.customlayouts')



@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

<div class="container form-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <ol class="breadcrumb">
            <li><a href="/leaves">leaves</a></li>
            <li class="active">Edit leave</li>
          </ol>
            <div class="panel-regis">
                <div class="heading">Edit leave</div>

                <div class = "panel-body">
                <form class = "" method = "GET" action = "{{route('leaves.update', $leaves->id)}}">

                  <label for="dateEnd" class="col-md-4 control-label">เขียนที่</label>
                  <div class="col-md-6">
                    <input type= "text" class = "form-control" name="writeAt" value="{{$leaves->writeAt}}"><br>
                  </div>

                  <label for="dateEnd" class="col-md-4 control-label">เรื่อง</label>
                  <div class="col-md-6">
                  <div class="form-group">

                    {!! Form::select('leavetype_id', $leavestypes, $leaves->leavetype_id, ['placeholder' => 'Select ', 'class'=>'form-control']) !!}
                  </div>
                  </div>

                  <label for="dateEnd" class="col-md-4 control-label">เนื่องจาก</label>
                  <div class="col-md-6">
                  <textarea name="reason" rows="5" cols="50" class = "form-control" >{{$leaves->writeAt}}</textarea><br>
                </div>

                <label for="dateEnd" class="col-md-4 control-label">เรียน</label>
                <div class="col-md-6">
                  <input type= "text" class = "form-control" name="dear" value="{{$leaves->dear}}"><br>
                </div>

                  <label for="dateEnd" class="col-md-4 control-label">ข้าพเจ้า</label>
                  <div class="col-md-6">
                  <div class="form-group">

                    	<input class="form-control" name="name" type="text" value= "{{$leaves->accountinfo->name}}" disabled>
                    	<input class = "form-control" name="user_id" value= "{{$leaves->user_id}}" type="hidden">

                  </div>
                  </div>

                  <label for="dateEnd" class="col-md-4 control-label">ตำแหน่งงาน</label>
                  <div class="col-md-6">
                    <div class="form-group">
                    {!! Form::select('designation', $designation, $leaves->accountinfo->designation_id, ['placeholder' => 'Select ', 'class'=>'form-control']) !!}
                    </div>
                  </div>

                  <label for="dateEnd" class="col-md-4 control-label">สังกัดแผนก</label>
                  <div class="col-md-6">
                    <div class="form-group">
                      {!! Form::select('department', $department, $leaves->accountinfo->department_id, ['placeholder' => 'Select ', 'class'=>'form-control']) !!}
                    </div>
                  </div>

                  <label for="dateEnd" class="col-md-4 control-label">ต้องการลาภายในช่วงเวลา</label>
                  <div class="col-md-6">
                    <select class="form-control" name="time">
                      <option>เต็มวัน</option>
                      <option>ครึ่งวันเช้า</option>
                      <option>ครึ่งวันบ่าย</option>
                    </select><br>
                  </div>

                <label for="dateEnd" class="col-md-4 control-label">ตั้งแต่วันที่</label>
                <div class="col-md-6">
                  <input type= "date" class = "form-control" name="dateFrom"  value="{{$leaves->dateFrom}}"><br>
                </div>

                <label for="dateEnd" class="col-md-4 control-label">ถึงวันที่</label>
                <div class="col-md-6">
                  <input type= "date" class = "form-control" name="dateTo" value="{{$leaves->dateTo}}" ><br>
                </div>

                <label for="dateEnd" class="col-md-4 control-label">Date Applied</label>
                <div class="col-md-6">
                  <input type= "date" class = "form-control" name="dateApplied" value="{{$leaves->dateApplied}}"><br>
                </div>

                <label for="dateEnd" class="col-md-4 control-label">โทร</label>
                <div class="col-md-6">
                  <input type= "text" class = "form-control" name="phone" value="{{$leaves->phone}}" ><br>
                </div>
                <label for="action" class="col-md-4 control-label"></label>
                <div class="col-md-6">
                <button type="submit" class="btn btn-success">Save</button>
                <button onclick="goBack()" class="btn btn-danger">Canceled</button>
              </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('script')

<script type="text/javascript">
  function goBack() {
    window.history.back();
}

   </script>
@endsection

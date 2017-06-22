@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit new account</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('accounts.update', $accounts->id) }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$accounts->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birth day</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{$accounts->birthday}}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="Gender" type="text" class="form-control" name="Gender" value="{{ $accounts->Gender }}" required autofocus>

                                @if ($errors->has('Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Gender</label>

                          <div class="col-md-6">
                        	<input checked="checked" name="gender" type="radio" value="M">
                        	<label for="gender" class="margin">Male</label>
                        	<input name="gender" type="radio" value="F" id="gender">
                        	<label for="gender" class="margin">Female</label>
                        </div>
                      </div> -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $accounts->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $accounts->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$accounts->address}}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nationality_id') ? ' has-error' : '' }}">
                            <label for="nationality_id" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                {!! Form::select('nationality_id', $nationality,  $accounts->nationality_id, ['placeholder' => 'Select nationality_id', 'class'=>'form-control']) !!}

                                @if ($errors->has('nationality_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('employeeID') ? ' has-error' : '' }}">
                            <label for="employeeID" class="col-md-4 control-label">EmployeeID</label>

                            <div class="col-md-6">
                                <input id="employeeID" type="text" class="form-control" name="employeeID" value="{{ $accounts->employeeID }}" required>

                                @if ($errors->has('employeeID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employeeID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label for="department_id" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                {!! Form::select('department_id', $department,  $accounts->department_id, ['placeholder' => 'Select department', 'class'=>'form-control']) !!}

                                @if ($errors->has('department_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('designation_id') ? ' has-error' : '' }}">
                            <label for="designation_id" class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                  {!! Form::select('designation_id', $designation,  $accounts->designation_id, ['placeholder' => 'Select designation', 'class'=>'form-control']) !!}

                                @if ($errors->has('designation_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hiredDate') ? ' has-error' : '' }}">
                            <label for="hiredDate" class="col-md-4 control-label">Hired Date</label>

                            <div class="col-md-6">
                                <input id="hiredDate" type="date" class="form-control" name="hiredDate" value="{{ $accounts->hiredDate }}" required>

                                @if ($errors->has('hiredDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hiredDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('exitDate') ? ' has-error' : '' }}">
                            <label for="exitDate" class="col-md-4 control-label">Exit Date</label>

                            <div class="col-md-6">
                                <input id="exitDate" type="date" class="form-control" name="exitDate" value="{{ $accounts->exitDate }}" required>

                                @if ($errors->has('exitDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exitDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="salary" class="col-md-4 control-label">Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control" name="salary" value="{{ $accounts->salary }}" required>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">ID card</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $accounts->user->username }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

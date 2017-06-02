@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-12 col-md-offset-2">
  <div class="form-group">
      <div class="col-md-2 ">
        <a class="btn btn-primary" href="{{ route('accounts.edit', $accounts->id) }}">Edit profile</a>
      </div>
  </div>
  <div class="form-group">
      <div class="col-md-2 ">
        <a class="btn btn-primary" href="{{ route('bankaccount.edit', $accounts->id) }}">Bank account</a>
      </div>
  </div>
  <div class="form-group">
      <div class="col-md-2 ">
        <a class="btn btn-primary" href="{{ route('awards.create')}}">Awards</a>
      </div>
  </div>
  </div>
  <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Personal Detail</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('accounts.show', $accounts->id) }}">

                        {{ csrf_field() }}

                            <label for="birthday" class="col-md-4 control-label" >Birth day :</label>
                            <label for="birthday" class="col-md-8 control-label" align="left">{{$accounts->birthday}}</label>

                            <label for="Gender" class="col-md-4 control-label">Gender :</label>
                            <label for="Gender" class="col-md-8 control-label">{{$accounts->Gender}}</label>

                            <label for="email" class="col-md-4 control-label">E-Mail :</label>
                            <label for="email" class="col-md-8 control-label">{{$accounts->email}}</label>

                            <label for="phone" class="col-md-4 control-label">Phone :</label>
                            <label for="phone" class="col-md-8 control-label">{{$accounts->phone}}</label>

                            <label for="address" class="col-md-4 control-label">Address :</label>
                            <label for="address" class="col-md-8 control-label">{{$accounts->address}}</label>

                            <label for="username" class="col-md-4 control-label">ID card :</label>
                            <label for="username" class="col-md-8 control-label">{{ $accounts->user->username }}</label>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Company Detail</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('accounts.show', $accounts->id) }}">

                        {{ csrf_field() }}

                            <label for="employeeID" class="col-md-5 control-label" >EmployeeID :</label>
                            <label for="employeeID" class="col-md-7 control-label" >{{$accounts->employeeID}}</label>

                            @if ($accounts->department_id == null)
                            <label for="departmentName" class="col-md-5 control-label">Department :</label>
                            <label for="departmentName" class="col-md-7 control-label"> null </label>
                            @endif

                            @if ($accounts->designation_id == null)
                            <label for="designationName" class="col-md-5 control-label">Designation :</label>
                            <label for="designationName" class="col-md-7 control-label"> null </label>
                            @endif

                            @if ($accounts->department_id != null)
                            <label for="departmentName" class="col-md-5 control-label">Department :</label>
                            <label for="departmentName" class="col-md-7 control-label">{{$accounts->department->departmentName}}</label>
                            @endif
                            @if ($accounts->designation_id != null)
                            <label for="designationName" class="col-md-5 control-label">Designation :</label>
                            <label for="designationName" class="col-md-7 control-label">{{$accounts->designation->designationName}}</label>
                            @endif

                            <label for="hiredDate" class="col-md-5 control-label">Date Hired :</label>
                            <label for="hiredDate" class="col-md-7 control-label">{{$accounts->hiredDate}}</label>

                            <label for="salary" class="col-md-5 control-label">Salary :</label>
                            <label for="salary" class="col-md-7 control-label">{{$accounts->salary}}</label>




                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Bank Account</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="get" action="{{ route('accounts.show', $accounts->id) }}">


                          @if ($accounts->bankaccount->account_name == null)
                          <label for="account_name" class="col-md-6 control-label" >Account Name :</label>
                          <label for="account_name" class="col-md-6 control-label" >null</label>
                          @endif
                          @if ($accounts->bankaccount->account_number == null)
                          <label for="account_number" class="col-md-6 control-label">Account Number :</label>
                          <label for="Genaccount_numberder" class="col-md-6 control-label">null</label>
                          @endif
                          @if ($accounts->bankaccount->bank_name == null)
                          <label for="bank_name" class="col-md-6 control-label">Bank Name :</label>
                          <label for="bank_name" class="col-md-6 control-label">null</label>
                          @endif

                            @if ($accounts->bankaccount->account_name != null)
                            <label for="account_name" class="col-md-6 control-label" >Account Name :</label>
                            <label for="account_name" class="col-md-6 control-label" >{{$accounts->bankaccount->account_name}}</label>
                            @endif
                            @if ($accounts->bankaccount->account_number != null)
                            <label for="account_number" class="col-md-6 control-label">Account Number :</label>
                            <label for="Genaccount_numberder" class="col-md-6 control-label">{{$accounts->bankaccount->account_number}}</label>
                            @endif
                            @if ($accounts->bankaccount->bank_name != null)
                            <label for="bank_name" class="col-md-6 control-label">Bank Name :</label>
                            <label for="bank_name" class="col-md-6 control-label">{{$accounts->bankaccount->bank_name}}</label>
                            @endif





                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

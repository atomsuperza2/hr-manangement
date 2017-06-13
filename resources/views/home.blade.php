@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    {{ Auth::user()->name }}
                    {{ Auth::user()->email}}
                    {{ Auth::user()->account_info->birthday}}
                    {{ Auth::user()->account_info->Gender}}
                    {{ Auth::user()->account_info->employeeID}}
                    {{ Auth::user()->account_info->hiredDate}}
                    {{ Auth::user()->account_info->exitDate}}
                    {{ Auth::user()->account_info->salary}}
                    {{ Auth::user()->account_info->bankaccount->account_name}}
                    {{ Auth::user()->account_info->bankaccount->account_number}}
                    {{ Auth::user()->account_info->bankaccount->bank_name}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

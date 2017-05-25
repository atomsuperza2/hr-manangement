<div class="container">
    @foreach ($bankaccounts as $bankaccount)
        {{ $bankaccount->id }}
        {{ $bankaccount->accountinfo->firstname}}
        {{ $bankaccount->accountinfo->lastname}}
        {{ $bankaccount->account_name}}
        {{ $bankaccount->account_number}}
        {{ $bankaccount->bank_name}}


    @endforeach
</div>

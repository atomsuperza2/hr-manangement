<div class="container">
    @foreach ($bankaccounts as $bankaccount)
        {{ $bankaccount->id }}
        {{ $bankaccount->accountinfo->name}}
  
        {{ $bankaccount->account_name}}
        {{ $bankaccount->account_number}}
        {{ $bankaccount->bank_name}}


    @endforeach
</div>

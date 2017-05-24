<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class AccountInfo extends Model
{
  protected $table = 'accountinfo';

  protected $guarded = ['username', 'password'];

   public function emdesignation()
   {
      return $this->hasOne('App\EmDesignationModel');
  }
 public function bankaccount()
 {
   return $this->hasOne('App\BankaccountModel');
 }
  public function scopeFilter($query, $keywords)
  {
  if ($keywords->firstname) {
      $query->where('firstname', 'LIKE', '%'.$keywords->firstname.'%');
  }
  if ($keywords->lastname) {
      $query->where('lastname', 'LIKE', '%'.$keywords->lastname.'%');
    }

    return $query;
  }
}

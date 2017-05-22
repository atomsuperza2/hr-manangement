<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class AccountInfo extends Model
{
  protected $table = 'accountinfo';

  protected $guarded = [];

  // public function data()
  // {
  //     return $this->hasOne('App\User');
  // }

}

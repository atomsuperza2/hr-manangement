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
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  public function bankaccount()
  {
      return $this->hasOne('App\BankaccountModel');
  }

  public function awards()
  {
    return $this->hasMany('App\AwardsModel');
  }

  public function training(){
    return $this->hasMany('App\TrainingModel');
  }

  public function leaves(){
    return $this->hasMany('App\LeavesModel');
  }

  public function absences(){
    return $this->hasMany('App\AbsencesModel');
  }

  public function attendance(){
    return $this->hasMany('App\AttendanceModel');
  }

  public function scopeFilter($query, $keywords)
  {
  if ($keywords->name) {
      $query->where('name', 'LIKE', '%'.$keywords->name.'%');
    }
  // if ($keywords->lastname) {
  //     $query->where('name', 'LIKE', '%'.$keywords->lastname.'%');
  //   }

    return $query;
  }
}

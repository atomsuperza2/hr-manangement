<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeavesModel extends Model
{
  protected $table = 'leaves';
  protected $guarded = [ ];

  public function leavestype()
  {
      return $this->belongsTo('App\LeavestypeModel', 'leavetype_id');
  }

  public function accountinfo()
  {
      return $this->belongsTo('App\AccountInfo', 'user_id');
  }
}

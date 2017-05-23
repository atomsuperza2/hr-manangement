<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmDesignationModel extends Model
{
  protected $table = 'emdesignation';
  protected $guarded = [ ];

  public function designation()
  {
      return $this->belongsTo('App\DesignationModel');
  }

  public function designation()
  {
      return $this->belongsTo('App\AccountInfo');
  }
}

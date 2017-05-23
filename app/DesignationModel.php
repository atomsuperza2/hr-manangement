<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignationModel extends Model
{
  protected $table = 'designation';
  protected $guarded = [ ];

  public function emdesignation()
  {
      return $this->hasMany('App\EmDesignationModel');
  }

  public function department()
  {
      return $this->belongsTo('App\DepartmentModel');
  }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    protected $table = 'department';
    protected $guarded = [ ];

    public function designation()
    {
        return $this->hasMany('App\DesignationModel');
    }
}

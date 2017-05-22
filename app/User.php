<?php

namespace App;

use App\AccountInfo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 //    public function post()
 // {
 //     return $this->hasMany(Post::class, 'author_id', 'id');
 // }

 public function account_info()
 {
     return $this->hasOne('App\AccountInfo');
 }

 public function data()
 {
     return $this->hasOne('App\AccountInfo');
 }
}

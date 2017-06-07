<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;

    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // user has many posts
    public function posts() 
    {
        return $this->hasMany('App\Post','user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }


    public function is_admin() {
        $role = $this->roles->first()->name;
        if($role == 'admin')
        {
          return true;
        }
        return false;
    }
}

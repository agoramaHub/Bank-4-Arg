<?php

namespace App;

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
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The Users privages that should be hidden for arrays.
     *
     * @var array
     */
    protected $casts = [
        'admin' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->admin;
    }

    public function forum() {

        return $this->hasMany(Forum::class);
    }

    public function account() {

        return $this->hasMany(Accounts::class);
    }

    public function deposits() {

        return $this->hasMany(Deposits::class);
    }

}

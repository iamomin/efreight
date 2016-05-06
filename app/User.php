<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'username', 'email', 'password', 'contact', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remembertoken',
    ];

    public function getCreatedAtColumn() {
        return null;
    }

    public function getUpdatedAtColumn() {
        return 'lastmodified';
    }
}

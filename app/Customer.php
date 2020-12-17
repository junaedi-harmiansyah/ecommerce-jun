<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Customer extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'password',
    ];
public function setPasswordAttribute($value)
{
    $this->attributes['password'] = bcrypt($value);
    $this->attributes['activate_token']=bcrypt($value);
}
}
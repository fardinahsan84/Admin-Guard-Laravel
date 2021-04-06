<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Blogger extends Authenticable
{
    use Notifiable;

    protected $guard = 'blogger';

    protected $fillable = ['name','email','password'];

    protected $hidden = ['pasword', 'remember_token'];
}

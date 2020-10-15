<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable 
{
    use Notifiable, AuthenticableTrait  ;//i saw it in stackoverflow i tried several solutions, no one work
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function idee()
    {
        return $this->hasMany('App\Idee');
    }

    protected $table = 'citoyens'; // eh da kman ?? ana ghayart al users table to citoyens , kan lazim a3melelha ta3rif as protected hone
    //let me see you phpmyadmin keda ? ana ma3am eshtaghil 3al phpmyadmin , achouf el database men hon fi laragon tmam wait a min
}

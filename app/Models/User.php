<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ILikeThem() {
        return $this->belongsToMany('App\Models\User', 'connection', 'from_id', 'to_id');
        //SELECT * FRROM user JOIN connection on to_id=user.id WHERE from_id=$this->id
    }


    public function theyLikeMe() {
        return $this->belongsToMany('App\Models\User', 'connection', 'to_id', 'from_id');
        //SELECT * FRROM user JOIN connection on from_id=user.id WHERE to_id=$this->id
    }


    public function songs() {
        //SELECT * FROM songs WHERE user_id = $this->id
        return $this->hasMany("App\Models\Song", "user_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use HasApiTokens, Notifiable;
    protected $fillable = [
        'nama', 'email', 'password', 'alamat', 'longitude', 'latitude',
        'kabupaten_id', 'gambar_profil','no_telepon'
    ];

    public function kabupaten()
    {
        return $this->hasOne('App\kabupaten', 'foreign_key', 'kabupaten_id');
    }
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
}

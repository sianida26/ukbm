<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    /**
     * id: unsigned bigint(20), primary key, auto increment
     * name: varchar(255)
     * username: varchar(255), index key,
     * email_verified_at: timestamp, nullable,
     * password: varchar(255)
     * remember_token: varchar(100), nullable,
     * created_at: timestamp, nullable
     * modified_at: timestamp, nullable
     */

    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //has one siswa
    public function siswa()
    {
        return $this->hasOne('App\Models\Siswa');
    }

    //has many jawaban
    public function jawabans()
    {
        return $this->hasMany('App\Models\Jawaban');
    }
}

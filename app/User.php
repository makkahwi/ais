<?php

namespace App;

use App\Models\roles;
use App\Models\statuses;
use App\Models\staff;
use App\Models\student;
use App\Models\contacts;
use App\Models\attendances;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'status_id',
        'leaveDate',
        'schoolNo',
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        'id' => 'integer',
        'role_id' => 'integer',
        'status_id' => 'integer',
        'leaveDate' => 'date',
        'schoolNo' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    public function role()
    {
        return $this->belongsTo(roles::class);
    }

    public function status()
    {
        return $this->belongsTo(statuses::class);
    }

    public function staff()
    {
        return $this->hasOne(staff::class, 'staffNo', 'schoolNo');
    }

    public function student()
    {
        return $this->hasOne(student::class, 'studentNo', 'schoolNo');
    }

    public function contact()
    {
        return $this->hasOne(contacts::class, 'schoolNo', 'schoolNo');
    }
    
    public function attendances()
    {
        return $this->hasMany(attendances::class);
    }
}

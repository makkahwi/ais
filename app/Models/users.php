<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class users
 * @package App\Models
 * @version April 15, 2020, 6:04 pm +08
 *
 * @property integer role_id
 * @property integer schoolNo
 * @property integer status_id
 * @property string name
 * @property string password
 * @property string|\Carbon\Carbon email_verified_at
 * @property string remember_token
 */
class users extends Model
{
    use Notifiable;
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
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
        'password',
        'remember_token'
    ];

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

    public static $rules = [
        'role_id' => 'required',
        'status_id' => 'required',
        'schoolNo' => 'required',
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
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
        return $this->hasOne( student::class, 'studentNo', 'schoolNo');
    }

    public function contact()
    {
        return $this->hasOne(contacts::class, 'schoolNo', 'schoolNo');
    }
    
    public function attendances()
    {
        return $this->hasMany(attendances::class, 'schoolNo', 'schoolNo');
    }

}

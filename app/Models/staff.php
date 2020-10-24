<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class staff
 * @package App\Models
 * @version July 26, 2020, 6:09 pm +08
 *
 * @property integer staffNo
 * @property string leaveDate
 * @property string eName
 * @property string aName
 * @property string dob
 * @property string gender
 */
class staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'staffNo',
        'eName',
        'aName'
    ];

    protected $casts = [
        'id' => 'integer',
        'staffNo' => 'integer',
        'eName' => 'string',
        'aName' => 'string'
    ];

    public static $rules = [
        'staffNo' => 'required',
        'eName' => 'required',
        'aName' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'staffNo', 'schoolNo');
    }

    public function classrooms()
    {
        return $this->hasMany(classrooms::class);
    }

    public function sches()
    {
        return $this->hasMany(sches::class);
    }

    public function markstypes()
    {
        return $this->hasMany(markstypes::class);
    }

}

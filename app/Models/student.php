<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class students
 * @package App\Models
 * @version February 20, 2020, 12:45 pm UTC
 *
 * @property integer studentNo
 * @property string leaveDate
 * @property string eName
 * @property string aName
 * @property string dob
 * @property string gender
 * @property integer classroom_id
 * @property string financial
 * @property string trans
 * @property string visa
 */
class student extends Model
{
    use SoftDeletes;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'studentNo',
        'eName',
        'aName',
        'classroom_id',
        'financial',
        'trans',
        'visa_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'studentNo' => 'integer',
        'eName' => 'string',
        'aName' => 'string',
        'classroom_id' => 'integer',
        'financial' => 'integer',
        'trans' => 'integer',
        'visa_id' => 'integer'
    ];

    public static $rules = [
        'studentNo' => 'required',
        'eName' => 'required',
        'aName' => 'required',
        'classroom_id' => 'required',
        'financial' => 'required',
        'trans' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'studentNo', 'schoolNo');
    }

    public function classroom()
    {
        return $this->belongsTo(classrooms::class);
    }

    public function marks()
    {
        return $this->hasMany(marks::class);
    }

    public function dues()
    {
        return $this->hasMany(studentsFinancials::class, 'studentNo', 'studentNo');
    }

    public function payments()
    {
        return $this->hasMany(studentsPayments::class, 'studentNo', 'studentNo');
    }
    
}

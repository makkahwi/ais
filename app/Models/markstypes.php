<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class markstypes
 * @package App\Models
 * @version February 20, 2020, 12:46 pm UTC
 *
 * @property string name
 * @property integer sem_id
 * @property integer classroom_id
 * @property integer id
 * @property integer max
 * @property integer weight
 * @property integer deadline
 */
class markstypes extends Model
{
    use SoftDeletes;

    public $table = 'markstypes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'sem_id',
        'classroom_id',
        'course_id',
        'teacher_id',
        'max',
        'weight',
        'deadline',
        'title',
        'used'
    ];

    protected $casts = [
        'id' => 'integer',
        'sem_id' => 'integer',
        'classroom_id' => 'integer',
        'course_id' => 'integer',
        'teacher_id' => 'integer',
        'max' => 'integer',
        'weight' => 'integer',
        'deadline' => 'text',
        'title' => 'string',
        'used' => 'integer'
    ];

    public static $rules = [
        'sem_id' => 'required',
        'classroom_id' => 'required',
        'course_id' => 'required',
        'teacher_id' => 'required',
        'max' => 'required',
        'weight' => 'required',
        'deadline' => 'required'
    ];

    public function sem()
    {
        return $this->belongsTo(sems::class);
    }

    public function classroom()
    {
        return $this->belongsTo(classrooms::class);
    }

    public function course()
    {
        return $this->belongsTo(courses::class);
    }

    public function teacher()
    {
        return $this->belongsTo(staff::class);
    }

    public function marks()
    {
        return $this->hasMany(marks::class, 'type_id');
    }
    
}

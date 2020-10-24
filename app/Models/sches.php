<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sches
 * @package App\Models
 * @version February 20, 2020, 12:46 pm UTC
 *
 * @property integer sem_id
 * @property integer classroom_id
 * @property integer id
 * @property integer teacher_id
 * @property integer id
 * @property integer time_id
 * @property integer status_id
 */
class sches extends Model
{
    use SoftDeletes;

    public $table = 'sches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'sem_id',
        'classroom_id',
        'course_id',
        'teacher_id',
        'day_id',
        'time_id',
        'status_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'sem_id' => 'integer',
        'classroom_id' => 'integer',
        'course_id' => 'integer',
        'teacher_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'status_id' => 'integer'
    ];
    
    public static $rules = [
        'sem_id' => 'required',
        'classroom_id' => 'required',
        'course_id' => 'required',
        'teacher_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'status_id' => 'required'
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
        return $this->belongsTo(staff::class, 'teacher_id', 'staffNo');
    }

    public function day()
    {
        return $this->belongsTo(days::class);
    }

    public function time()
    {
        return $this->belongsTo(times::class);
    }

    public function status()
    {
        return $this->belongsTo(statuses::class);
    }
    
}

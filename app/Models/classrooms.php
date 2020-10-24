<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class classrooms extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'title',
        'level_id',
        'roomNo',
        'capacity',
        'description',
        'supervisor_id',
        'status_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'level_id' => 'integer',
        'roomNo' => 'integer',
        'capacity' => 'integer',
        'description' => 'string',
        'supervisor_id' => 'integer',
        'status_id' => 'integer'
    ];
    public static $rules = [
        'title' => 'required',
        'level_id' => 'required',
        'roomNo' => 'required',
        'capacity' => 'required',
        'description' => 'required',
        'supervisor_id' => 'required',
        'status_id' => 'required'
    ];

    public function level()
    {
        return $this->belongsTo(levels::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(staff::class, 'supervisor_id', 'staffNo');
    }

    public function status()
    {
        return $this->belongsTo(statuses::class);
    }

    public function students()
    {
        return $this->hasMany(student::class, 'classroom_id');
    }

    public function sches()
    {
        return $this->hasMany(sches::class, 'classroom_id');
    }

    public function markstypes()
    {
        return $this->hasMany(markstypes::class);
    }
}
<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class attendances extends Model
{
    use SoftDeletes;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'sem_id',
        'schoolNo',
        'date',
        'attendance',
        'note'
    ];

    protected $casts = [
        'id' => 'integer',
        'sem_id' => 'integer',
        'schoolNo' => 'integer',
        'date' => 'date',
        'attendance' => 'integer',
        'note' => 'string'
    ];
    
    public static $rules = [
        'sem_id' => 'required',
        'schoolNo' => 'required',
        'date' => 'required',
        'attendance' => 'required'
    ];

    public function sem()
    {
        return $this->belongsTo(sems::class);
    }

    public function user()
    {
        return $this->belongsTo(users::class, 'schoolNo', 'schoolNo');
    }
    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class marks
 * @package App\Models
 * @version February 20, 2020, 12:46 pm UTC
 *
 * @property string title
 * @property integer sem_id
 * @property integer classroom_id
 * @property integer id
 * @property integer studentNo
 * @property integer markValue
 * @property integer fullMarkValue
 * @property integer note
 */
class marks extends Model
{
    use SoftDeletes;

    public $table = 'marks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'title',
        'sem_id',
        'classroom_id',
        'course_id',
        'studentNo',
        'markValue',
        'fullMarkValue',
        'note'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'sem_id' => 'integer',
        'classroom_id' => 'integer',
        'course_id' => 'integer',
        'studentNo' => 'integer',
        'markValue' => 'integer',
        'fullMarkValue' => 'integer',
        'note' => 'text'
    ];
    
    public static $rules = [
        'title' => 'required',
        'sem_id' => 'required',
        'classroom_id' => 'required',
        'course_id' => 'required',
        'studentNo' => 'required',
        'markValue' => 'required',
        'fullMarkValue' => 'required'
    ];

    
}

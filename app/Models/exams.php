<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class exams extends Model
{
  use SoftDeletes;

  public $table = 'exams';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'sem_id',
    'course_id',
    'title',
    'date',
    'note'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'sem_id' => 'integer',
    'course_id' => 'integer',
    'title' => 'string',
    'date' => 'date',
    'note' => 'text'
  ];
  
  public static $rules =
  [
    'sem_id' => 'required',
    'course_id' => 'required',
    'title' => 'required',
    'date' => 'required'
  ];

  public function sem()
  {
    return $this->belongsTo(sems::class);
  }

  public function course()
  {
    return $this->belongsTo(courses::class);
  }
}

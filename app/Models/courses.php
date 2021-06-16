<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class courses extends Model
{
  use SoftDeletes;

  public $table = 'courses';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];
  protected $appends = ['markstypesWeights', 'unusedmarkstypes', 'issuedResults'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'title',
    'code',
    'textbook',
    'level_id',
    'description',
    'status_id'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'title' => 'string',
    'code' => 'string',
    'textbook' => 'string',
    'level_id' => 'integer',
    'description' => 'string',
    'status_id' => 'integer'
  ];

  public static $rules =
  [
    'title' => 'required',
    'code' => 'required',
    'textbook' => 'required',
    'level_id' => 'required',
    'description' => 'required',
    'status_id' => 'required'
  ];

  public function level()
  {
    return $this->belongsTo(levels::class);
  }

  public function status()
  {
    return $this->belongsTo(statuses::class);
  }

  public function sches()
  {
    return $this->hasMany(sches::class, 'course_id');
  }

  public function markstypes()
  {
    return $this->hasMany(markstypes::class, 'course_id');
  }

  public function exams()
  {
    return $this->hasMany(exams::class, 'course_id');
  }
  
  public function currentSem()
  {
    return sems::where('start', '<=', today())
      ->where('end', '>=', today())
      ->first();
  }

  public function getmarkstypesWeightsAttribute()
  {
    return $this->markstypes()
    ->where('sem_id', $this->currentSem('id'))
      ->sum('weight');
  }

  public function getUnusedmarkstypesAttribute()
  {
    return $this->markstypes()
      ->where('used', 0)
      ->get();
  }

  public function getIssuedResultsAttribute()
  {
    return $this->markstypes()
    ->where('title', 'Course Final Result')
    ->where('sem_id', $this->currentSem('id'))
      ->count();
  }

  public function exceptedStudents()
  {
    return $this->belongsToMany(student::class, 'courses_exceptions', 'course_id', 'studentNo')
      ->withTimestamps();
  }
}

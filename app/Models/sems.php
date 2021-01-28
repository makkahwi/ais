<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sems extends Model
{
  use SoftDeletes;

  public $table = 'sems';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'title',
    'year_id',
    'start',
    'join',
    'results',
    'resultsDone',
    'end'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'title' => 'string',
    'year_id' => 'integer',
    'start' => 'date',
    'join' => 'date',
    'results' => 'date',
    'resultsDone' => 'integer',
    'end' => 'date'
  ];

  public static $rules =
  [
    'title' => 'required',
    'year_id' => 'required',
    'start' => 'required',
    'join' => 'required',
    'results' => 'required',
    'end' => 'required'
  ];

  public function year()
  {
    return $this->belongsTo(years::class);
  }
  
  public function sches()
  {
    return $this->hasMany(sches::class);
  }
  
  public function markstypes()
  {
    return $this->hasMany(markstypes::class);
  }
  
  public function exams()
  {
    return $this->hasMany(exams::class);
  }
  
  public function attendances()
  {
    return $this->hasMany(attendances::class);
  }
  
  public function dues()
  {
    return $this->hasMany(studentsFinancials::class, 'sem_id');
  }
  
  public function payments()
  {
    return $this->hasMany(studentsPayments::class, 'sem_id');
  }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class levels extends Model
{
  use SoftDeletes;

  public $table = 'levels';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable = [
    'title',
    'description'
  ];

  protected $casts = [
    'id' => 'integer',
    'title' => 'string',
    'description' => 'text'
  ];
  
  public static $rules = [
    'title' => 'required',
    'description' => 'required'
  ];

  public function classrooms()
  {
    return $this->hasMany(classrooms::class, 'level_id');
  }

  public function courses()
  {
    return $this->hasMany(courses::class, 'level_id');
  }
}
<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class years extends Model
{
  use SoftDeletes;

  public $table = 'years';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable = [
    'title'
  ];

  protected $casts = [
    'id' => 'integer',
    'title' => 'string'
  ];

  public static $rules = [
    'title' => 'required'
  ];

  public function sems()
  {
    return $this->hasMany(sems::class);
  }
}

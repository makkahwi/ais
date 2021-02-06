<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentsFinancialsDiscounts extends Model
{
  use SoftDeletes;

  public $table = 'studentsfinancialsdiscounts';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'type',
    'title',
    'description',
    'amount',
  ];

  protected $casts =
  [
    'id' => 'integer',
    'type' => 'string',
    'title' => 'string',
    'description' => 'string',
    'amount' => 'float',
  ];

  public static $rules =
  [
    'type' => 'required',
    'title' => 'required',
    'description' => 'required',
    'amount' => 'required',
  ];

  public function studentsFinancials()
  {
    return $this->hasMany(studentsFinancials::class);
  }

  public function grantedStudents()
  {
    return $this->belongsToMany(student::class, 'granted_discounts', 'discount_id', 'studentNo')
      ->withTimestamps();
  }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentsFinancials extends Model
{
  use SoftDeletes;

  public $table = 'studentsfinancials';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'sem_id',
    'studentNo',
    'category_id',
    'discount_id',
    'finalAmount',
  ];

  protected $casts =
  [
    'id' => 'integer',
    'sem_id' => 'integer',
    'studentNo' => 'integer',
    'category_id' => 'integer',
    'discount_id' => 'integer',
    'finalAmount' => 'float',
  ];

  public static $rules =
  [
    'sem_id' => 'required',
    'studentNo' => 'required',
    'category_id' => 'required',
    'finalAmount' => 'required',
  ];

  public function student()
  {
    return $this->belongsTo(student::class, 'studentNo', 'studentNo');
  }

  public function category()
  {
    return $this->belongsTo(studentsFinancialsCategories::class);
  }

  public function discount()
  {
    return $this->belongsTo(studentsFinancialsDiscounts::class);
  }

  public function sem()
  {
    return $this->belongsTo(sems::class);
  }
}

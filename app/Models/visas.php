<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class visas extends Model
{
  use SoftDeletes;

  public $table = 'visas';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable = [
    'studentNo',
    'status',
    'firstEntry',
    'lastEntry',
    'visaExpiry'
  ];

  protected $casts = [
    'id' => 'integer',
    'studentNo' => 'integer',
    'status' => 'string',
    'firstEntry' => 'date',
    'lastEntry' => 'date',
    'visaExpiry' => 'date'
  ];
  
  public static $rules = [
    'studentNo' => 'required',
    'status' => 'required',
    'firstEntry' => 'required',
    'lastEntry' => 'required',
    'visaExpiry' => 'required'
  ];

  public function student()
  {
    return $this->belongsTo( student::class, 'studentNo', 'studentNo');
  }
}

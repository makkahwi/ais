<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
  use SoftDeletes;

  public $table = 'students';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';


  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'studentNo',
    'eName',
    'aName',
    'classroom_id',
    'financial',
    'trans',
    'visa_id'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'studentNo' => 'integer',
    'eName' => 'string',
    'aName' => 'string',
    'classroom_id' => 'integer',
    'financial' => 'integer',
    'trans' => 'integer',
    'visa_id' => 'integer'
  ];

  public static $rules =
  [
    'studentNo' => 'required',
    'eName' => 'required',
    'aName' => 'required',
    'classroom_id' => 'required',
    'financial' => 'required',
    'trans' => 'required',
    'visa_id' => 'required',
  ];

  public function user()
  {
    return $this->belongsTo(users::class, 'studentNo', 'schoolNo');
  }
}

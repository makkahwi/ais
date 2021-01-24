<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class marks extends Model
{
  use SoftDeletes;

  public $table = 'marks';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable = [
    'type_id',
    'studentNo',
    'markValue',
    'note'
  ];

  protected $casts = [
    'id' => 'integer',
    'type_id' => 'integer',
    'studentNo' => 'integer',
    'markValue' => 'float',
    'note' => 'text'
  ];

  public static $rules = [
    'type_id' => 'required',
    'studentNo' => 'required',
    'markValue' => 'required',
  ];

  public function type()
  {
    return $this->belongsTo(markstypes::class);
  }

  public function student()
  {
    return $this->belongsTo( student::class, 'studentNo', 'studentNo');
  }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
  use SoftDeletes;

  public $table = 'students';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable = [
    'studentNo',
    'eName',
    'aName',
    'classroom_id',
    'sponsor',
    'tuitiondiscounts',
    'tuitionfreq',
    'financial',
    'trans'
  ];

  protected $casts = [
    'id' => 'integer',
    'studentNo' => 'integer',
    'eName' => 'string',
    'aName' => 'string',
    'classroom_id' => 'integer',
    'sponsor' => 'string',
    'tuitiondiscounts' => 'string',
    'tuitionfreq' => 'boolean',
    'financial' => 'boolean',
    'trans' => 'boolean'
  ];

  public static $rules = [
    'studentNo' => 'required',
    'eName' => 'required',
    'aName' => 'required',
    'classroom_id' => 'required',
    'sponsor' => 'required',
    'tuitiondiscounts' => 'required',
    'tuitionfreq' => 'required',
    'financial' => 'required',
    'trans' => 'required',
  ];

  public function user()
  {
    return $this->belongsTo(users::class, 'studentNo', 'schoolNo');
  }

  public function classroom()
  {
    return $this->belongsTo(classrooms::class);
  }

  public function marks()
  {
    return $this->hasMany(marks::class, 'studentNo', 'studentNo');
  }

  public function dues()
  {
    return $this->hasMany(studentsFinancials::class, 'studentNo', 'studentNo');
  }

  public function payments()
  {
    return $this->hasMany(studentsPayments::class, 'studentNo', 'studentNo');
  }
}

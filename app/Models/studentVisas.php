<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentVisas extends Model
{
  use SoftDeletes;

  public $table = 'studentVisas';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'studentNo',
    'fathersPassport',
    'fathersVisas',
    'fathersLetter',
    'mothersPassport',
    'mothersVisas',
    'mothersLetter',
    'studentsPassport',
    'studentsVisas',
    'embassyLetter',
    'schoolLetter',
    'note',
  ];

  protected $casts =
  [
    'id' => 'integer',
    'studentNo' => 'integer',
    'fathersPassport' => 'string',
    'fathersVisas' => 'string',
    'fathersLetter' => 'string',
    'mothersPassport' => 'string',
    'mothersVisas' => 'string',
    'mothersLetter' => 'string',
    'studentsPassport' => 'string',
    'studentsVisas' => 'string',
    'embassyLetter' => 'string',
    'schoolLetter' => 'string',
    'note' => 'string',
  ];

  public static $rules =
  [
    'studentNo' => 'required',
    'fathersPassport' => 'required',
    'fathersVisas' => 'required',
    'fathersLetter' => 'required',
    'mothersPassport' => 'required',
    'mothersVisas' => 'required',
    'mothersLetter' => 'required',
    'studentsPassport' => 'required',
    'studentsVisas' => 'required',
    'embassyLetter' => 'required',
  ];

  public function student()
  {
    return $this->belongsTo(student::class, 'studentNo', 'studentNo');
  }
}

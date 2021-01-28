<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contacts extends Model
{
  use SoftDeletes;

  public $table = 'contacts';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'schoolNo',
    'dob',
    'gender',
    'email',
    'phone',
    'address',
    'relative_id',
    'relation',
    'nation',
    'ppno',
    'ppExpiry',
    'visaExpiry',
    'photo',
    'passport',
    'visa',
    'doc1',
    'doc2',
    'doc3'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'schoolNo' => 'integer',
    'dob' => 'date',
    'gender' => 'string',
    'email' => 'email',
    'phone' => 'string',
    'address' => 'text',
    'relative_id' => 'integer',
    'relation' => 'string',
    'nation' => 'string',
    'ppno' => 'string',
    'ppExpiry' => 'date',
    'visaExpiry' => 'date',
    'photo' => 'text',
    'passport' => 'text',
    'visa' => 'text',
    'doc1' => 'text',
    'doc2' => 'text',
    'doc3' => 'text'
  ];

  public static $rules =
  [
    'schoolNo' => 'required',
    'dob' => 'required',
    'gender' => 'required',
    'address' => 'required',
    'relative_id' => 'required',
    'relation' => 'required',
    'nation' => 'required',
    'ppno' => 'required',
    'ppExpiry' => 'required',
    'visaExpiry' => 'required',
    'photo' => 'required',
    'passport' => 'required',
    'visa' => 'required',
    'doc1' => 'required',
    'doc2' => 'required'
  ];

  public function user()
  {
    return $this->belongsTo(users::class, 'schoolNo', 'schoolNo');
  }

  public function relative()
  {
    return $this->belongsTo(relatives::class);
  }
}

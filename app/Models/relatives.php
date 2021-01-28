<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class relatives extends Model
{
  use SoftDeletes;

  public $table = 'relatives';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'id';

  public $fillable =
  [
    'eName',
    'aName',
    'name',
    'gender',
    'job',
    'org',
    'email',
    'phone',
    'hAddress',
    'wAddress',
    'more',
    'nation',
    'ppno',
    'ppExpiry',
    'visaExpiry',
    'passport',
    'visa'
  ];

  protected $casts =
  [
    'id' => 'integer',
    'eName' => 'string',
    'aName' => 'string',
    'name' => 'string',
    'gender' => 'string',
    'job' => 'string',
    'org' => 'string',
    'email' => 'string',
    'phone' => 'string',
    'hAddress' => 'string',
    'wAddress' => 'string',
    'more' => 'string',
    'nation' => 'string',
    'ppno' => 'string',
    'ppExpiry' => 'date',
    'visaExpiry' => 'date',
    'passport' => 'string',
    'visa' => 'string'
  ];

  public static $rules =
  [
    'eName' => 'required',
    'aName' => 'required',
    'name' => 'required',
    'gender' => 'required',
    'job' => 'required',
    'email' => 'required',
    'phone' => 'required',
    'hAddress' => 'required'
  ];

  public function contacts()
  {
      return $this->hasMany(contacts::class, 'relative_id');
  }
}

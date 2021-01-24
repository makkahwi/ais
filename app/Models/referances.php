<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class referances extends Model
{
  use SoftDeletes;

  public $table = 'referances';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  protected $primaryKey = 'refId';

  public $fillable = [
    'type',
    'ref'
  ];

  protected $casts = [
    'refId' => 'integer',
    'type' => 'string',
    'ref' => 'string',
  ];

  public static $rules = [
    'type' => 'required',
    'ref' => 'required',
  ];
}

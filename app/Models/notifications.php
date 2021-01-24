<?php

namespace App\Models;

use Eloquent as Model;

class notifications extends Model
{
  public $table = 'notifications';
  
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  protected $dates = ['deleted_at'];

  public $fillable = [
    'type',
    'notifiable_type',
    'notifiable_id',
    'data',
    'read_at'
  ];

  protected $casts = [
    'id' => 'string',
    'type' => 'string',
    'notifiable_type' => 'string',
    'notifiable_id' => 'integer',
    'data' => 'string',
    'read_at' => 'datetime'
  ];

  public static $rules = [
    'type' => 'required',
    'notifiable_type' => 'required',
    'notifiable_id' => 'required',
    'data' => 'required'
  ];
}

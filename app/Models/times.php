<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class times
 * @package App\Models
 * @version February 20, 2020, 12:47 pm UTC
 *
 * @property string title
 * @property time start
 * @property time end
 */
class times extends Model
{
    use SoftDeletes;

    public $table = 'times';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'title',
        'start',
        'end'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'start' => 'time',
        'end' => 'time',
    ];
    
    public static $rules = [
        'title' => 'required',
        'start' => 'required',
        'end' => 'required'
    ];

    public function sches()
    {
        return $this->hasMany(sches::class);
    }

}

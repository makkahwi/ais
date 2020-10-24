<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class days
 * @package App\Models
 * @version February 20, 2020, 12:46 pm UTC
 *
 * @property string title
 */
class days extends Model
{
    use SoftDeletes;

    public $table = 'days';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'title'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];
    
    public static $rules = [
        'title' => 'required'
    ];

    public function sches()
    {
        return $this->hasMany(sches::class);
    }

}

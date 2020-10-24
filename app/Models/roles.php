<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class roles
 * @package App\Models
 * @version February 20, 2020, 12:45 pm UTC
 *
 * @property string title
 * @property string description
 */
class roles extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'title',
        'description'
    ];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'text'
    ];

    public static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function users()
    {
        return $this->hasMany(users::class);
    }
    
}

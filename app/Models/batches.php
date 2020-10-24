<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class batches extends Model
{
    use SoftDeletes;

    public $table = 'batches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'batch',
    ];

    protected $casts = [
        'id' => 'integer',
        'batch' => 'string',
    ];
    public static $rules = [
        'batch' => 'required',
    ];

    public function categories()
    {
        return $this->hasMany(studentsFinancialsCategories::class, 'batch_id');
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentsFinancialsCategories extends Model
{
    use SoftDeletes;

    public $table = 'studentsfinancialscategories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'batch_id',
        'frequency',
        'title',
        'amount',
        'level_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'batch_id' => 'integer',
        'frequency' => 'string',
        'title' => 'string',
        'amount' => 'integer',
        'level_id' => 'integer',
    ];

    public static $rules = [
        'batch_id' => 'required',
        'frequency' => 'required',
        'title' => 'required',
        'amount' => 'required',
    ];

    public function studentsFinancials()
    {
        return $this->hasMany(studentsFinancials::class);
    }

    public function level()
    {
        return $this->belongsTo(levels::class);
    }
}

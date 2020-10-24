<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentsFinancialsDiscounts extends Model
{
    use SoftDeletes;

    public $table = 'studentsfinancialsdiscounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'type',
        'title',
        'amount',
    ];

    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'title' => 'string',
        'amount' => 'integer',
    ];

    public static $rules = [
        'type' => 'required',
        'title' => 'required',
        'amount' => 'required',
    ];

    public function studentsFinancials()
    {
        return $this->hasMany(studentsFinancials::class);
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentsPayments extends Model
{
    use SoftDeletes;

    public $table = 'studentspayments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'sem_id',
        'date',
        'studentNo',
        'amount',
        'method',
        'receipt',
        'receiptNo',
        'note',
    ];

    protected $casts = [
        'id' => 'integer',
        'sem_id' => 'integer',
        'date' => 'date',
        'studentNo' => 'integer',
        'amount' => 'float',
        'method' => 'string',
        'receipt' => 'string',
        'receiptNo' => 'string',
        'note' => 'string',
    ];

    public static $rules = [
        'sem_id' => 'required',
        'date' => 'required',
        'studentNo' => 'required',
        'amount' => 'required',
        'method' => 'required',
    ];

    public function student()
    {
        return $this->belongsTo(student::class, 'studentNo', 'studentNo');
    }

    public function sem()
    {
        return $this->belongsTo(sems::class);
    }
}
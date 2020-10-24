<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class visas
 * @package App\Models
 * @version February 25, 2020, 10:00 am UTC
 *
 * @property integer studentNo
 * @property integer status
 * @property integer firstEntry
 * @property string lastEntry
 * @property string visaExpiry
 */
class visas extends Model
{
    use SoftDeletes;

    public $table = 'visas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id';

    public $fillable = [
        'studentNo',
        'status',
        'firstEntry',
        'lastEntry',
        'visaExpiry'
    ];

    protected $casts = [
        'id' => 'integer',
        'studentNo' => 'integer',
        'status' => 'string',
        'firstEntry' => 'date',
        'lastEntry' => 'date',
        'visaExpiry' => 'date'
    ];
    
    public static $rules = [
        'studentNo' => 'required',
        'status' => 'required',
        'firstEntry' => 'required',
        'lastEntry' => 'required',
        'visaExpiry' => 'required'
    ];

    public function student()
    {
        return $this->belongsTo( student::class, 'studentNo', 'studentNo');
    }
    
}

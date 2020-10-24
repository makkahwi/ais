<?php

namespace App\Repositories;

use App\Models\sches;
use App\Repositories\BaseRepository;

/**
 * Class schesRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:46 pm UTC
*/

class schesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sem_id',
        'classroom_id',
        'course_id',
        'teacher_id',
        'day_id',
        'time_id',
        'status_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sches::class;
    }
}

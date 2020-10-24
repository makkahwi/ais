<?php

namespace App\Repositories;

use App\Models\markstypes;
use App\Repositories\BaseRepository;

/**
 * Class markstypesRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:46 pm UTC
*/

class markstypesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sem_id',
        'classroom_id',
        'course_id',
        'teacher_id',
        'max',
        'weight',
        'deadline',
        'title',
        'used'
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
        return markstypes::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\student;
use App\Repositories\BaseRepository;

/**
 * Class studentsRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:45 pm UTC
*/

class studentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'studentNo',
        'eName',
        'aName',
        'classroom_id',
        'financial',
        'trans',
        'visa_id'
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
        return  student::class;
    }
}

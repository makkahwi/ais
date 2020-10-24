<?php

namespace App\Repositories;

use App\Models\times;
use App\Repositories\BaseRepository;

/**
 * Class timesRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:47 pm UTC
*/

class timesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'start',
        'end'
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
        return times::class;
    }
}

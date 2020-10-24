<?php

namespace App\Repositories;

use App\Models\sems;
use App\Repositories\BaseRepository;

/**
 * Class semsRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:47 pm UTC
*/

class semsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'year_id',
        'start',
        'join',
        'results',
        'resultsDone',
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
        return sems::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\days;
use App\Repositories\BaseRepository;

/**
 * Class daysRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:46 pm UTC
*/

class daysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
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
        return days::class;
    }
}

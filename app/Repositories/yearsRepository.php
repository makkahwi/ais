<?php

namespace App\Repositories;

use App\Models\years;
use App\Repositories\BaseRepository;

/**
 * Class yearsRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:46 pm UTC
*/

class yearsRepository extends BaseRepository
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
        return years::class;
    }
}

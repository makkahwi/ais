<?php

namespace App\Repositories;

use App\Models\staff;
use App\Repositories\BaseRepository;

/**
 * Class staffRepository
 * @package App\Repositories
 * @version July 26, 2020, 6:09 pm +08
*/

class staffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'staffNo',
        'eName',
        'aName'
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
        return staff::class;
    }
}

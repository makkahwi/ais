<?php

namespace App\Repositories;

use App\Models\visas;
use App\Repositories\BaseRepository;

/**
 * Class visasRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:45 pm UTC
*/

class visasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'studentNo',
        'status',
        'firstEntry',
        'lastEntry',
        'visaExpiry'
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
        return visas::class;
    }
}

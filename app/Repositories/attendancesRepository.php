<?php

namespace App\Repositories;

use App\Models\attendances;
use App\Repositories\BaseRepository;

/**
 * Class attendancesRepository
 * @package App\Repositories
 * @version February 25, 2020, 10:00 am UTC
*/

class attendancesRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'sem_id',
    'schoolNo',
    'date',
    'attendance',
    'note'
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
    return attendances::class;
  }
}

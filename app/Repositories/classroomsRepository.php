<?php

namespace App\Repositories;

use App\Models\classrooms;
use App\Repositories\BaseRepository;

/**
 * Class classroomsRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:48 pm UTC
*/

class classroomsRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'title',
    'level_id',
    'roomNo',
    'capacity',
    'description',
    'supervisor_id',
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
    return classrooms::class;
  }
}

<?php

namespace App\Repositories;

use App\Models\exams;
use App\Repositories\BaseRepository;

/**
 * Class examsRepository
 * @package App\Repositories
 * @version February 25, 2020, 10:00 am UTC
*/

class examsRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'sem_id',
    'level_id',
    'course_id',
    'title',
    'date',
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
    return exams::class;
  }
}

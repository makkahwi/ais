<?php

namespace App\Repositories;

use App\Models\marks;
use App\Repositories\BaseRepository;

/**
 * Class marksRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:46 pm UTC
*/

class marksRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'type_id',
    'studentNo',
    'markValue',
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
    return marks::class;
  }
}

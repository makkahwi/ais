<?php

namespace App\Repositories;

use App\Models\levels;
use App\Repositories\BaseRepository;

/**
 * Class levelsRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:47 pm UTC
*/

class levelsRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'title',
    'description'
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
    return levels::class;
  }
}

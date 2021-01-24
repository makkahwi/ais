<?php

namespace App\Repositories;

use App\Models\batches;
use App\Repositories\BaseRepository;

/**
 * Class batchesRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:48 pm UTC
*/

class batchesRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'batch',
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
    return batches::class;
  }
}

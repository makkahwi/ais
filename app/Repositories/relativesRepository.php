<?php

namespace App\Repositories;

use App\Models\relatives;
use App\Repositories\BaseRepository;

/**
 * Class relativesRepository
 * @package App\Repositories
 * @version April 14, 2020, 3:30 pm +08
*/

class relativesRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'eName',
    'aName',
    'name',
    'gender',
    'relation',
    'job',
    'org',
    'email',
    'phone',
    'hAddress',
    'wAddress',
    'more',
    'nation',
    'ppno',
    'ppExpiry',
    'visaExpiry',
    'passport',
    'visa'
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
    return relatives::class;
  }
}

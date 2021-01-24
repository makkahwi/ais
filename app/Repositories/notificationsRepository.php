<?php

namespace App\Repositories;

use App\Models\notifications;
use App\Repositories\BaseRepository;

/**
 * Class notificationsRepository
 * @package App\Repositories
 * @version August 4, 2020, 1:12 pm +08
*/

class notificationsRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'type',
    'notifiable_type',
    'notifiable_id',
    'data',
    'read_at'
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
    return notifications::class;
  }
}

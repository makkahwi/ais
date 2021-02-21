<?php

namespace App\Repositories;

use App\Models\studentVisas;
use App\Repositories\BaseRepository;

/**
 * Class studentVisasRepository
 * @package App\Repositories
 * @version February 20, 2020, 12:45 pm UTC
*/

class studentVisasRepository extends BaseRepository
{
  /**
   * @var array
   */
  protected $fieldSearchable = [
    'studentNo',
    'fathersPassport',
    'fathersVisas',
    'fathersLetter',
    'mothersPassport',
    'mothersVisas',
    'mothersLetter',
    'studentsPassport',
    'studentsVisas',
    'embassyLetter',
    'schoolLetter',
    'note',
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
    return  studentVisas::class;
  }
}

<?php

namespace App\Repositories;

use App\Models\JenisAduan;
use App\Repositories\BaseRepository;

/**
 * Class JenisAduanRepository
 * @package App\Repositories
 * @version May 5, 2021, 5:25 am UTC
*/

class JenisAduanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'slug', 
        'name'
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
        return JenisAduan::class;
    }
}

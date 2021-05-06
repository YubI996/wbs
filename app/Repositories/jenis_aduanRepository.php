<?php

namespace App\Repositories;

use App\Models\jenis_aduan;
use App\Repositories\BaseRepository;

/**
 * Class jenis_aduanRepository
 * @package App\Repositories
 * @version May 6, 2021, 3:02 am UTC
*/

class jenis_aduanRepository extends BaseRepository
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
        return jenis_aduan::class;
    }
}

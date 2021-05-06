<?php

namespace App\Repositories;

use App\Models\Aduan;
use App\Repositories\BaseRepository;

/**
 * Class AduanRepository
 * @package App\Repositories
 * @version May 5, 2021, 5:29 am UTC
*/

class AduanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'jenis_aduan_id',
        'nama_terlapor',
        'jabatan_terlapor',
        'pangkat_terlapor',
        'instansi_terlapor',
        'unit_terlapor',
        'kota_terlapor',
        'penjelasan'
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
        return Aduan::class;
    }
}

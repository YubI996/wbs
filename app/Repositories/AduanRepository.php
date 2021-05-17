<?php

namespace App\Repositories;

use App\Models\aduan;
use App\Repositories\BaseRepository;

/**
 * Class aduanRepository
 * @package App\Repositories
 * @version May 6, 2021, 3:04 am UTC
*/

class AduanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'jenis_aduan',
        'file_bukti',
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
        return aduan::class;
    }
}

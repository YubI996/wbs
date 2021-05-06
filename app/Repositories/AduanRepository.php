<?php

namespace App\Repositories;

use App\Models\aduan;
use App\Repositories\BaseRepository;

/**
 * Class aduanRepository
 * @package App\Repositories
 * @version May 6, 2021, 3:04 am UTC
*/

class aduanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'jenis_aduan',
        'file_bukti',
        'status_verifikasi',
        'catatan_verifikasi',
        'file_verifikator',
        'status_validasi',
        'catatan_validasi',
        'file_inspektur',
        'hasil_penyidikan',
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

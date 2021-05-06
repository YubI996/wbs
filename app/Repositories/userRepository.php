<?php

namespace App\Repositories;

use App\Models\user;
use App\Repositories\BaseRepository;

/**
 * Class userRepository
 * @package App\Repositories
 * @version May 4, 2021, 11:53 pm UTC
*/

class userRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        
        'nip',
        'tempat',
        'tanggal',
        'jabatan',
        'pangkat',
        'instansi',
        'unit',
        'kota',
        'nohp',
        'alamat',
        'nolain',
        
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
        return user::class;
    }
}

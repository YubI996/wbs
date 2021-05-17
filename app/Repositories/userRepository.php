<?php

namespace App\Repositories;

use App\Models\user;
use App\Repositories\BaseRepository;

/**
 * Class userRepository
 * @package App\Repositories
 * @version May 6, 2021, 3:03 am UTC
*/

class userRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nip',
        'name',
        'email',
        'password',
        'role_id',
        'avatar',
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
        'email_verified_at',
        'remember_token'
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

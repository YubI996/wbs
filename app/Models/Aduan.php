<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Aduan
 * @package App\Models
 * @version May 5, 2021, 5:29 am UTC
 *
 * @property integer $user_id
 * @property integer $jenis_aduan_id
 * @property string $nama_terlapor
 * @property string $jabatan_terlapor
 * @property string $pangkat_terlapor
 * @property string $instansi_terlapor
 * @property string $unit_terlapor
 * @property string $kota_terlapor
 * @property string $penjelasan
 */
class Aduan extends Model
{

    use HasFactory;

    public $table = 'aduans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'jenis_aduan_id' => 'integer',
        'nama_terlapor' => 'string',
        'jabatan_terlapor' => 'string',
        'pangkat_terlapor' => 'string',
        'instansi_terlapor' => 'string',
        'unit_terlapor' => 'string',
        'kota_terlapor' => 'string',
        'penjelasan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'jenis_aduan_id' => 'required',
        'nama_terlapor' => 'required|string|max:255',
        'jabatan_terlapor' => 'required|string|max:255',
        'pangkat_terlapor' => 'required|string|max:255',
        'instansi_terlapor' => 'required|string|max:255',
        'unit_terlapor' => 'required|string|max:255',
        'kota_terlapor' => 'required|string|max:255',
        'penjelasan' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

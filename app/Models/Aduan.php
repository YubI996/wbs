<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class aduan
 * @package App\Models
 * @version May 6, 2021, 3:04 am UTC
 *
 * @property integer $user_id
 * @property integer $jenis_aduan
 * @property string $file_bukti
 * @property string $status_verifikasi
 * @property string $catatan_verifikasi
 * @property string $file_verifikator
 * @property string $status_validasi
 * @property string $catatan_validasi
 * @property string $file_inspektur
 * @property string $hasil_penyidikan
 * @property string $nama_terlapor
 * @property string $jabatan_terlapor
 * @property string $pangkat_terlapor
 * @property string $instansi_terlapor
 * @property string $unit_terlapor
 * @property string $kota_terlapor
 * @property string $penjelasan
 */
class aduan extends Model
{

    use HasFactory;

    public $table = 'aduans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'jenis_aduan' => 'integer',
        'file_bukti' => 'string',
        'status_verifikasi' => 'string',
        'catatan_verifikasi' => 'string',
        'file_verifikator' => 'string',
        'status_validasi' => 'string',
        'catatan_validasi' => 'string',
        'file_inspektur' => 'string',
        'hasil_penyidikan' => 'string',
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
        'jenis_aduan' => 'required|integer',
        'file_bukti' => 'required|string|max:255',
        'status_verifikasi' => 'nullable|string',
        'catatan_verifikasi' => 'nullable|string|max:255',
        'file_verifikator' => 'nullable|string|max:255',
        'status_validasi' => 'nullable|string',
        'catatan_validasi' => 'nullable|string|max:255',
        'file_inspektur' => 'nullable|string|max:255',
        'hasil_penyidikan' => 'nullable|string',
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

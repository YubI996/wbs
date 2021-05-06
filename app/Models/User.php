<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
/**
 * Class user
 * @package App\Models
 * @version May 6, 2021, 3:03 am UTC
 *
 * @property string $nip
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $role
 * @property string $avatar
 * @property string $tempat
 * @property string $tanggal
 * @property string $jabatan
 * @property string $pangkat
 * @property string $instansi
 * @property string $unit
 * @property string $kota
 * @property string $nohp
 * @property string $alamat
 * @property string $nolain
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $remember_token
 */
class user extends Authenticatable
{

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nip',
        'name',
        'email',
        'password',
        'role',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nip' => 'string',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'role' => 'integer',
        'avatar' => 'string',
        'tempat' => 'string',
        'tanggal' => 'date',
        'jabatan' => 'string',
        'pangkat' => 'string',
        'instansi' => 'string',
        'unit' => 'string',
        'kota' => 'string',
        'nohp' => 'string',
        'alamat' => 'string',
        'nolain' => 'string',
        'email_verified_at' => 'datetime',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nip' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'role' => 'required|integer',
        'avatar' => 'nullable|string|max:255',
        'tempat' => 'nullable|string|max:255',
        'tanggal' => 'nullable',
        'jabatan' => 'nullable|string|max:255',
        'pangkat' => 'nullable|string|max:255',
        'instansi' => 'nullable|string|max:255',
        'unit' => 'nullable|string|max:255',
        'kota' => 'nullable|string|max:255',
        'nohp' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'nolain' => 'nullable|string|max:255',
        'email_verified_at' => 'nullable',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

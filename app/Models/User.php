<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class user
 * @package App\Models
 * @version May 4, 2021, 11:53 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $nip
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
 * @property string $remember_token
 */
class user  extends Authenticatable
{
    

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
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
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'nip' => 'string',
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
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'nip' => 'required|string|max:255',
        'tempat' => 'required|string|max:255',
        'tanggal' => 'required',
        'jabatan' => 'nullable|string|max:255',
        'pangkat' => 'nullable|string|max:255',
        'instansi' => 'nullable|string|max:255',
        'unit' => 'nullable|string|max:255',
        'kota' => 'nullable|string|max:255',
        'nohp' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'nolain' => 'nullable|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public static $messages = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'nip' => 'required|string|max:255',
        'tempat' => 'required|string|max:255',
        'tanggal' => 'required',
        'jabatan' => 'nullable|string|max:255',
        'pangkat' => 'nullable|string|max:255',
        'instansi' => 'nullable|string|max:255',
        'unit' => 'nullable|string|max:255',
        'kota' => 'nullable|string|max:255',
        'nohp' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'nolain' => 'nullable|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}

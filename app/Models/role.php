<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class role
 * @package App\Models
 * @version May 5, 2021, 5:55 am UTC
 *
 * @property string $nama
 */
class role extends Model
{

    use HasFactory;

    public $table = 'roles';
    protected $primaryKey = 'slug';



    public $fillable = [
        'nama',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}

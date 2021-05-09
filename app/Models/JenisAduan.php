<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class JenisAduan
 * @package App\Models
 * @version May 5, 2021, 5:25 am UTC
 *
 * @property string $name
 */
class JenisAduan extends Model
{

    use HasFactory;

    public $table = 'jenis_aduans';
    protected $primaryKey = 'slug';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function aduans()
    {
        return $this->hasMany(Aduan::class, 'jenis_aduan', 'slug' );
    }
}

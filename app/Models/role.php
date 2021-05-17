<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class role
 * @package App\Models
 * @version May 6, 2021, 3:03 am UTC
 *
 * @property integer $slug
 * @property string $nama
 */
class Role extends Model
{

    use HasFactory;

    public $table = 'roles';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'slug',
        'nama'
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
        'slug' => 'required|integer',
        'nama' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'slug');
    }
}


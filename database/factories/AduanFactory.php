<?php

namespace Database\Factories;

use App\Models\Aduan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AduanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aduan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'jenis_aduan_id' => $this->faker->word,
        'nama_terlapor' => $this->faker->word,
        'jabatan_terlapor' => $this->faker->word,
        'pangkat_terlapor' => $this->faker->word,
        'instansi_terlapor' => $this->faker->word,
        'unit_terlapor' => $this->faker->word,
        'kota_terlapor' => $this->faker->word,
        'penjelasan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

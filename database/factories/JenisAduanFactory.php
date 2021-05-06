<?php

namespace Database\Factories;

use App\Models\JenisAduan;
use Illuminate\Database\Eloquent\Factories\Factory;

class JenisAduanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JenisAduan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->word,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

class userFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'password' => $this->faker->word,
        'nip' => $this->faker->word,
        'tempat' => $this->faker->word,
        'tanggal' => $this->faker->word,
        'jabatan' => $this->faker->word,
        'pangkat' => $this->faker->word,
        'instansi' => $this->faker->word,
        'unit' => $this->faker->word,
        'kota' => $this->faker->word,
        'nohp' => $this->faker->word,
        'alamat' => $this->faker->word,
        'nolain' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

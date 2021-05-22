<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class userFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->word,
        'name' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'role' => $this->faker->randomDigitNotNull,
        'avatar' => $this->faker->word,
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
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

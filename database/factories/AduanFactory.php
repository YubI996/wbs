<?php

namespace Database\Factories;

use App\Models\Aduan;
use App\Models\User;
use App\Models\JenisAduan as ja;
use Illuminate\Database\Eloquent\Factories\Factory;

class aduanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = aduan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::where('role_id',4)->get('id')->toArray();
        return [
            'user_id' => $users[array_rand($users)]["id"],
            'jenis_aduan' => ja::get()->random()->id,
            'file_bukti' => '2cttn_fismat_inun.docx',
            'status_verifikasi' => null,
            'catatan_verifikasi' => null,
            'file_verifikator' => null,
            'status_validasi' => null,
            'catatan_validasi' => null,
            'file_inspektur' => null,
            'hasil_penyidikan' => null,
            'nama_terlapor' => $this->faker->word(),
            'jabatan_terlapor' => $this->faker->word(),
            'pangkat_terlapor' => $this->faker->word(),
            'instansi_terlapor' => $this->faker->word(),
            'unit_terlapor' => $this->faker->word(),
            'kota_terlapor' => $this->faker->word(),
            'penjelasan' => $this->faker->word(),
            'tgl_selesai' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ];
    }
}

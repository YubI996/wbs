<?php

namespace Database\Factories;

use App\Models\Aduan;
use App\Models\User;
use App\Models\JenisAduan as ja;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
        $arr = [1,2,4];
        $k = \array_rand($arr);
        return [
            'user_id' => $users[array_rand($users)]["id"],
            'jenis_aduan' => ja::get()->random()->id,
            'file_bukti' => '2cttn_fismat_inun.docx',
            'status' => $arr[$k],
            // 'status' => null,
            'catatan_verifikasi' => null,
            'file_verifikator' => null,
            // 'status' => null,
            'catatan_validasi' => null,
            'file_inspektur' => null,
            // 'hasil_penyidikan' => null,
            'nama_terlapor' => $this->faker->word(),
            'jabatan_terlapor' => $this->faker->word(),
            'pangkat_terlapor' => $this->faker->word(),
            'instansi_terlapor' => $this->faker->word(),
            'unit_terlapor' => $this->faker->word(),
            'kota_terlapor' => $this->faker->word(),
            'penjelasan' => $this->faker->word(),
            'tgl_selesai' => null,
            'created_at' => Carbon::now(),
            // 'created_at' => Carbon::now()->subWeeks(2),
            'updated_at' => null
        ];
    }
}

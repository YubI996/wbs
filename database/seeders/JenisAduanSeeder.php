<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\JenisAduan;

class JenisAduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $JenisAduan = ["Pelanggaran Disiplin Pegawai","Penyalahgunaan wewenang","Mal Administrasi dan pemerasan/penganiayaan",
                        "Perlakuan amoral/perselingkuhan","Korupsi","pelanggaran dalam Pengadaan Barang dan Jasa",
                        "Pungutan Liar/Percaloan/Suap","Narkoba"];
        foreach($JenisAduan as $data){
            DB::table('jenis_aduans')->insert([
                'name' => $data,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

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
        $JenisAduan = [1 => "Pelanggaran Disiplin Pegawai",2 => "Penyalahgunaan wewenang",3 => "Mal Administrasi dan pemerasan/penganiayaan",
                        4=>"Perlakuan amoral/perselingkuhan",5 => "Korupsi",6 => "pelanggaran dalam Pengadaan Barang dan Jasa",
                        7=>"Pungutan Liar/Percaloan/Suap",8 => "Narkoba"];
        foreach($JenisAduan as $k => $data){
            DB::table('jenis_aduans')->insert([
                'slug' => $k,
                'name' => $data,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

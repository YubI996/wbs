<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = [4=>"Pengadu",3=>"Admin",2=>"Verifikator", 1=>"Inspektur"];
        foreach($Role as $key => $data){
            DB::table('roles')->insert([
                'nama' => $data,
                'slug' => $key,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}

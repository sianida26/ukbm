<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nKelas = 3;
        for($i = 1; $i <= $nKelas; $i++){
            $kelas = new Kelas;
            $kelas->name = "X MIPA ".$i;
            $kelas->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jenis_masakan;

class JenisMasakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_masakan = [
            [
                'id' => 1,
                'nama_jenis' => 'Makanan',
            ],
            [
                'id' => 2,
                'nama_jenis' => 'Minuman',
            ],
    ];
    jenis_masakan::insert($jenis_masakan);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\masakan;
class MasakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masakan = [
            [
                'id' => 1,
                'nama_masakan' =>'Bakso',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 2,
                'nama_masakan' =>'Brownies Tape',
                'harga' => '25000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 3,
                'nama_masakan' => 'Chicken Finger',
                'harga' => '12000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 4,
                'nama_masakan' =>'Martabak Malabar',
                'harga' => '20000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 5,
                'nama_masakan' =>'Mie Aceh',
                'harga' => '20000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 6,
                'nama_masakan' =>'Nasi Grombyang',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 7,
                'nama_masakan' =>'Nasi Langgi Solo',
                'harga' => '20000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 8,
                'nama_masakan' =>'Nasi Timbel Sunda',
                'harga' => '15000',
                'status' =>'Tersedia', 
                'id_jenis' =>1,
            ],
            [
                'id' => 9,
                'nama_masakan' =>'Nasi Uduk',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 10,
                'nama_masakan' =>'Nasi Gandul',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 11,
                'nama_masakan' =>'Nasi Goreng Cakalang',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 12,
                'nama_masakan' =>'Nasi Gudeg',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 13,
                'nama_masakan' =>'Nasi Jamblang',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 14,
                'nama_masakan' =>'Nasi Langgi',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 15,
                'nama_masakan' =>'Nasi Megono',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 16,
                'nama_masakan' =>'Omelet Mie',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 17,
                'nama_masakan' =>'Pia Tape',
                'harga' => '15000',
                'status' => 'Kosong',
                'id_jenis' =>1,
            ],
            [
                'id' => 18,
                'nama_masakan' =>'Sate',
                'harga' => '20000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 19,
                'nama_masakan' =>'Siomay',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 20,
                'nama_masakan' =>'Soto',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>1,
            ],
            [
                'id' => 21,
                'nama_masakan' =>'Cendol',
                'harga' => '8000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 22,
                'nama_masakan' =>'Dalgona Coffee',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 23,
                'nama_masakan' =>'Es Teler',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 24,
                'nama_masakan' =>'Flavoured Soda',
                'harga' => '12000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 25,
                'nama_masakan' =>'Flavoured Tea',
                'harga' => '8000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 26,
                'nama_masakan' =>'Fresh Milk',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 27,
                'nama_masakan' =>'Fruit Juice',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 28,
                'nama_masakan' =>'Fruit Tea',
                'harga' => '8000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 29,
                'nama_masakan' =>'Fruit Yogurt',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 30,
                'nama_masakan' =>'Hot Chocolate',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 31,
                'nama_masakan' =>'Hot Tea',
                'harga' => '6000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 32,
                'nama_masakan' =>'Ice Blend',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 33,
                'nama_masakan' =>'Ice Drink',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 34,
                'nama_masakan' =>'Latte',
                'harga' => '12000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 35,
                'nama_masakan' =>'Macchiato',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 36,
                'nama_masakan' =>'Milk Shake',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 37,
                'nama_masakan' =>'Milk Tea',
                'harga' => '9000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 38,
                'nama_masakan' =>'Boba',
                'harga' => '15000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 39,
                'nama_masakan' =>'Mojito',
                'harga' => '10000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
            [
                'id' => 40,
                'nama_masakan' =>'Smoothie',
                'harga' => '12000',
                'status' => 'Tersedia',
                'id_jenis' =>2,
            ],
        ];
        masakan::insert($masakan);
    }
}

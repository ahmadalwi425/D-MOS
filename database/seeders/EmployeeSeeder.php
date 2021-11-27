<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            [
                'id' => 5,
                'name' => 'Kala',
                'email' => 'kalani@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('kala123'),
                'level' => 2,
            ],
            [
                'id' => 6,
                'name' => 'Nayla',
                'email' => 'nayla@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('nayla123'),
                'level' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Arkan',
                'email' => 'arkana@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('arkana123'),
                'level' => 3,
            ],
            [
                'id' => 8,
                'name' => 'Dirga',
                'email' => 'dirgantara@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('dirga123'),
                'level' => 3,
            ],
            [
                'id' => 9,
                'name' => 'Tama',
                'email' => 'pratama@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('tama123'),
                'level' => 3,
            ],
            [
                'id' => 10,
                'name' => 'Rain',
                'email' => 'raina@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('rain123'),
                'level' => 3,
            ],
            [
                'id' => 11,
                'name' => 'Rere',
                'email' => 'renata@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('rere123'),
                'level' => 3,
            ],
            [
                'id' => 12,
                'name' => 'Naur',
                'email' => 'naurasya@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('naur123'),
                'level' => 4,
            ],
            [
                'id' => 13,
                'name' => 'Raja',
                'email' => 'Naraja@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('raja123'),
                'level' => 4,
            ],
            [
                'id' => 14,
                'name' => 'Wijin',
                'email' => 'wijin@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('wijin123'),
                'level' => 4,
            ],
            [
                'id' => 15,
                'name' => 'Jamal',
                'email' => 'Jamaludin@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('jamal123'),
                'level' => 4,
            ],
            [
                'id' => 16,
                'name' => 'Mahen',
                'email' => 'mahendra@gmail.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('mahen123'),
                'level' => 4,
            ],
            

           ];
 
           User::insert($users);
        
    }
}

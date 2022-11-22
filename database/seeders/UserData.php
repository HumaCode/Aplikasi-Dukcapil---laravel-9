<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = [
            [
                'nik'       => '2222333344445555',
                'no_kk'     => '2222333344445555',
                'nama_leng' => 'Fulan',
                'tlp'       => '0099988877766',
                'email'     => 'fulan@gmail.com',
                'level'     => 1,
                'password'  => bcrypt('123456'),
            ],
            [
                'nik'       => '2222333344445556',
                'no_kk'     => '2222333344445556',
                'nama_leng' => 'User',
                'tlp'       => '0099988877766',
                'email'     => 'user@gmail.com',
                'level'     => 2,
                'password'  => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Alexandre Guyot',
                'email'          => 'a.pro.guyot@gmail.com',
                'password'       => bcrypt('alex'),
                'remember_token' => null,
                'locale'         => '',
            ],
            [
                'id'             => 2,
                'name'           => 'Alison Villiers',
                'email'          => 'alison.villiers@gmail.com',
                'password'       => bcrypt('alison'),
                'remember_token' => null,
                'locale'         => '',
            ],
        ];

        User::insert($users);
    }
}

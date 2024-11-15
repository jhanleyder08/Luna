<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Jhan Leyder Duarte',
            'email'    => 'jhanleyder71@gmail.com',
            'password' => 'admin1234'
        ]);

        User::create([
            'name'     => 'Duarte Mena',
            'email'    => 'jhanleyder@hotmail.com',
            'password' => 'apredizduarte'
        ]);

        User::create([
            'name'     => 'Kirvy Jesus Vasquez',
            'email'    => 'kirvyvs@gmail.com',
            'password' => 'aprendizkirvyvaszquez'
        ]);
    }
}

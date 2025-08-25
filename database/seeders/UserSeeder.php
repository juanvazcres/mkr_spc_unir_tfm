<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Juan Angel de Jesus Vazquez Crespo',
            'email' => 'juanvazcres@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'Marco Tadeo Aguilar Cuatepotzo',
            'email' => 'cuate787@hotmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'Delfino Romero Diaz',
            'email' => 'delfrodi@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin');
    }
}

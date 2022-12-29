<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'estado' =>1,
            // 'apellido_ma'=>'Alvarez',
            'apellido_pa'=>'Nuñez',
            'tipo_dni'=>1,
            'dni'=>76232414,
            'celular'=>987912688,
            'tipo'=>1
        ])->assignRole('admin');

        User::create([
            'name' => 'sabrina',
            'email' => 'sabrina@gmail.com',
            'password' => Hash::make('123'),
            'estado' =>1,
            // 'apellido_ma'=>'Pomajulca',
            'apellido_pa'=>'Pomajulca',
            'tipo_dni'=>1,
            'dni'=>76232414,
            'celular'=>987912688,
            'tipo'=>2
        ])->assignRole('postulante');
    }
}

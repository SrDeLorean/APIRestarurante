<?php

namespace Database\Seeders;

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
            'nombre' => 'Sebastian Ibarra',
            'email' => 'xebaelvemgador@gmail.com',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Ibarra',
            'telefono' => '+5699404978 9',
            'apodo' => 'SrDeLorean',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);

        User::create([
            'nombre' => 'Javier Ibarra',
            'email' => 'jibarra@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 1,
            'apellido' => 'Ibarra',
            'telefono' => '+56994049789',
            'apodo' => 'JavierInuzuka',
            'nacimiento' => '1992-07-08',
            'imagen' => 'hola'
        ]);

        User::create([
            'nombre' => 'gerente',
            'email' => 'gerente@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 2,
            'apellido' => 'gerente',
            'telefono' => '+56994049789',
            'apodo' => 'gerente',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);

        User::create([
            'nombre' => 'usuario',
            'email' => 'usuario@proyectomapache.com',
            'password' => bcrypt('Sterek64'),
            'role' => 3,
            'apellido' => 'usuario',
            'telefono' => '+56994049789',
            'apodo' => 'usuario',
            'nacimiento' => '1996-09-06',
            'imagen' => 'hola'
        ]);
    }
}

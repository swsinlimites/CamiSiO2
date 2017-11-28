<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Software', 
				'last_name' => 'Sin Limites', 
				'email' 	=> 'swsinlimitesud@gmail.com', 
				'user' 		=> 'sw',
				'password' 	=> \Hash::make('admin'),
				'type' 		=> 'administrador',
				'active' 	=> 1,
				'address' 	=> 'Bogotá D.C.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Luis', 
				'last_name' => 'Rincón', 
				'email' 	=> 'lsrinconb@correo.udistrital.edu.co', 
				'user' 		=> 'luis',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Madrid',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Kevin', 
				'last_name' => 'Perdomo', 
				'email' 	=> 'kevinwolfing@hotmail.com', 
				'user' 		=> 'kevin',
				'password' 	=> \Hash::make('654321'),
				'type' 		=> 'artist',
				'active' 	=> 1,
				'address' 	=> 'Bogotá',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}

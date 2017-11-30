<?php

use Illuminate\Database\Seeder;
use App\Estampa;

class EstampaTableSeeder extends Seeder
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
        		'name' => 'Heart',
        		'description' => 'Estampa de un corazón',
        		'slug' => 'heart',
        		'price' => 10.00,
        		'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'image' => 'http://joy105.com/wp-content/uploads/2017/05/heart.png'
        	],
        	[
        		'name' => 'Ancla',
        		'description' => 'Estampa de un ancla',
        		'slug' => 'ancla',
        		'price' => 12.00,
        		'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'image' => 'img/ancla.png'
        	],
        	[
        		'name' => 'Star',
        		'description' => 'Estampa de una estrella',
        		'slug' => 'star',
        		'price' => 10.00,
        		'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'image' => 'img/star.png'
        	]
        );

        Estampa::insert($data);
    }
}

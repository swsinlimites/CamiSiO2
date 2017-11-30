<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Playera 1',
				'slug' 			=> 'playera-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 2',
				'slug' 			=> 'playera-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 3',
				'slug' 			=> 'playera-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 30.00,
				'image' 		=> 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 4',
				'slug' 			=> 'playera-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 25.00,
				'image' 		=> 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 5',
				'slug' 			=> 'playera-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 28.00,
				'image' 		=> 'http://www.camisetaseconomicas.com/186-thickbox_default/algodon-color-135gr.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 6',
				'slug' 			=> 'playera-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 27.50,
				'image' 		=> 'http://mundotubers.com/903/camiseta-heretics-logo-th-blanco.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Playera 7',
				'slug' 			=> 'playera-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 25.00,
				'image' 		=> 'http://chevignon.vteximg.com.br/arquivos/ids/305157-366-451/63_6097002_121117_0.jpg?v=636415938287070000',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Playera 8',
				'slug' 			=> 'playera-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 23.00,
				'image' 		=> 'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);
    }
}

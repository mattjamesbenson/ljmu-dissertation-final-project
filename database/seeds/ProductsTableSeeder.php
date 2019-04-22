<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
    	DB::table('products')->insert([
    		//TOP PICKS
			[
				'src' => '/images/RB4125.jpeg',
		        'name' => 'Ray-Ban RB4125 Cats 5000 Classic',
		        'description' => 'Ray-Ban Cats 5000 Classic sunglasses feature a reinterpretation of the iconic Aviator into a lightweight propionate plastic frame material. These sunglasses offer a similar aviator look and style, yet are completely unique and unmatchable. Cats 5000 Classic RB4125 sunglasses represent everything that is timeless, bold and unparalled in the Ray-Ban collection. Pick from a variety of frame colors as well as lens treatments such as polarized, crystal brown gradient, crystal grey gradient and crystal green. These sunglasses offer optimal comfort and 100% UV protection to keep you safe and glare-free.',
		        'price' => 136,
		        'sale_price' => null,
		        'category' => 'womens',
		        'stock_amount' => 5,
		       	'new_product' => false,
		        'recommended' => true,
    		],

			[
				'src' => '/images/hookipa.jpeg',
		        'name' => 'MAUI JIM Hookipa',
		        'description' => 'With a rimless frame for an unobstructed view, this lightweight, durable style offers great coverage for protection against the wind, blowing sand and debris. The saltwater safe polarised lenses and frame make this style great for the beach.',
		        'price' => 159,
		        'sale_price' => null,
		        'category' => 'mens',
		        'stock_amount' => 20,
		       	'new_product' => false,
		        'recommended' => true,
    		],

    		//NEW RELEASES
			[
				'src' => '/images/RB8301.jpeg',
		        'name' => 'Ray-Ban RB8301',
		        'description' => 'Ray-Ban Tech RB8301 sunglasses are all about innovation and use of new materials. This Ray-Ban Tech segment highlights the use of carbon fiber. Carbon fiber and a resin composite creates a lightweight, strong, flexible, and resilient material. The Ray-Ban monel Aviator™ inspired sunglasses have a smaller rounded eye shape and is paired with slim elongated carbon fiber temples. Rubber temple tips for added comfort and non-slip grip. This model comes with crystal lenses and is available in a polarized lens option with an anti-reflective and hydro-oleophobic coating.',
		        'price' => 172,
		        'sale_price' => null,
		        'category' => 'mens',
		        'stock_amount' => 20,
		       	'new_product' => true,
		        'recommended' => false,
    		],


    		//MENS
    		[
    			'src' => '/images/OO9014 Gascan.jpeg',
		        'name' => 'Oakley OO9014 Gascan',
		        'description' => 'Gascan lenses are cut from the curve of a single lens shield, then mounted in the frame to maintain the original, continuous contour. The look is so unique, we customized our corporate logo just for this eyewear. The lightweight O Matter frame material offers premium comfort while our Three-Point Fit retains the lenses in precise optical alignment.',
		        'price' => 85,
		        'sale_price' => null,
		        'category' => 'mens',
		        'stock_amount' => 0,
		       	'new_product' => false,
		        'recommended' => false,
    		],

    		[
    			'src' => '/images/RB2132.jpeg',
			    'name' => 'Ray-Ban RB2132 New Wayfarer Classic',
		        'description' => 'FREE SUNGLASSES CLEANING KIT INCLUDED. The new Ray-Ban Wayfarer sunglasses are a slightly smaller interpretation--size 52mm--on the most famous style in sunwear. The Ray-Ban signature logo is still displayed on sculpted temples, but the new Wayfarer flaunts a softer eye shape than the original and offers both classic and fashion bright color options. This updated version comes with a stylish black frame and green lenses, providing ultimate clarity and enhanced vision.',
		        'price' => 118,
		        'sale_price' => null,
		        'category' => 'mens',
		        'stock_amount' => 8,
		       	'new_product' => false,
		        'recommended' => false,
    		],

			//WOMENS
    		[
    			'src' => '/images/RB4061.jpeg',
			    'name' => 'Ray-Ban RB4061',
		        'description' => 'The Ray-Ban RB4061 sunglasses are a small classic round style, crafted in propionate plastic. These prescription friendly sunglasses are ideal for petite faces and come polarized with crystal lenses. The metal Ray-Ban signature finishes the temples.',
		        'price' => 145,
		        'sale_price' => null,
		        'category' => 'womens',
		        'stock_amount' => 20,
		       	'new_product' => false,
		        'recommended' => true,
    		],

    		[
    			'src' => '/images/RB4098.jpeg',
			    'name' => 'Ray-Ban RB4098 Jackie Ohh II',
		        'description' => 'A unique take on the classic feminine look, Jackie Ohh II steps up the boldness in sunglasses. Featuring rounded corners and a deeper, oversized rectangle lens shape than its predecessor, the Jackie Ohh, these sunglasses are made to dazzle. Jackie Ohh II RB4098 sunglasses are made for women who want to be noticed and are not afraid to make a statement. The oversized solid or gradient lenses are available in fashion-forward frame colors such as black, green, Boudreaux and tortoise. With its frame made out of nylon, these sunglasses are comfortable to wear while guaranteeing you 100% UV protection.',
		        'price' => 136,
		        'sale_price' => null,
		        'category' => 'womens',
		        'stock_amount' => 2,
		       	'new_product' => false,
		        'recommended' => false,
    		],

    		[
    			'src' => '/images/421.jpeg',
			    'name' => 'MAUI JIM 421 Sugar Beach',
		        'description' => 'Maui Jim Sunglasses feature polarised Plus 2 technology, which wipes out glare and stokes the colour with a patented multi-layer design. The lenses feature three rare earth elements, which maximize the transmission of the colours your eyes see naturally. The result is visual acuity, contrast, and colour that is unrivaled.',
		        'price' => 145,
		        'sale_price' => null,
		        'category' => 'womens',
		        'stock_amount' => 14,
		       	'new_product' => false,
		        'recommended' => false,
    		],

    		//CHILDRENS


    		//SALE
    		[
    			'src' => '/images/RB3025.jpeg',
			    'name' => 'Ray-Ban RB3025 Aviator Classic',
		        'description' => 'Currently one of the most iconic sunglass models in the world, Ray-Ban Aviator Classic sunglasses were originally designed for U.S. aviators in 1937. Aviator Classic sunglasses are a timeless model that combines great aviator styling with exceptional quality, performance and comfort.',
		        'price' => 172,
		        'sale_price' => 142,
		        'category' => 'mens',
		        'stock_amount' => 3,
		       	'new_product' => false,
		        'recommended' => false,
    		],

	   		[
    			'src' => '/images/RJ9506S.jpeg',
			    'name' => 'Ray-Ban RJ9506S Aviator JUNIOR',
		        'description' => 'Adults are not the only ones in need of stylish, protective eyewear. Ray-Ban Aviator Junior sunglasses are the Aviator of choice for future pilots and daredevils. This junior version of the iconic Ray-Ban Aviator offers the same pilot look and 100% UV protection. The gold frame is paired with green lenses.',
		        'price' => 60,
		        'sale_price' => 50,
		        'category' => 'childrens',
		        'stock_amount' => 25,
		       	'new_product' => false,
		        'recommended' => false,
    		],

    		[
    			'src' => '/images/PS54IS.jpeg',
			    'name' => 'PRADA PS 54IS',
		        'description' => 'Spotted: An A-lister must-have style. The gunmetal frame with grey polarised lenses is the perfect combination of luxury and lifestyle. It is a refined frame that maintains its sporty touch.',
		        'price' => 240,
		        'sale_price' => 180,
		        'category' => 'mens',
		        'stock_amount' => 5,
		       	'new_product' => false,
		        'recommended' => false,
    		],
    	]);

	    // factory(App\Product::class, 20)->create();  
    }
}

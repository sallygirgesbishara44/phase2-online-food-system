<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Classic',
            'description' => 'Beff patty,tomato,lettuce,pickles,chedder cheese,grilled onion,cocktail sauce.',
            'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/935-classic-burger.png',
            'price' => 20.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Cheese',
             'description' => 'double beef, tomato, lettuce, pickles, onion, cocktail sauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/941-classic-cheese.png',
             'price' => 30.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double',
             'description' => 'double beef,tomato,lettuce,pickles,chedder cheese,grilled onion,cocktail sauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/947-double-classic.png',
             'price' => 35.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double Cheese',
             'description' => 'double beef,double cheese,tomato,lettuce,pickles,chedder cheese,grilled onion,cocktail sauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/953-classic-double-cheese.png',
             'price' => 40.00
         ]);

         DB::table('products')->insert([
             'name' => 'Italian style',
             'description' => 'beef patty, fresh mozzarella, onion, italian salami, tomato.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/959-italian-style.png',
             'price' => 43.50
         ]);
         DB::table('products')->insert([
             'name' => 'Mozzarella Soft',
             'description' => 'beef patty, fresh mozzarella, tomato, balsamic.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/965-mozzarella-soft.png',
             'price' => 40.50
         ]);
         DB::table('products')->insert([
             'name' => ' Blue cheese',
             'description' => 'beef patty, blue cheese, french sauce, rucola.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/971-blue-cheese.png',
             'price' => 45.00
         ]);
         DB::table('products')->insert([
             'name' => ' Chedder Cheese',
             'description' => 'beef patty, bacon, cheddar cheese, tomato, lettuce, onions.',
             'photo' => ' https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/977-bacon-and-cheddar-cheese.png',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Swiss Cheese',
             'description' => 'beef patty, bacon, cheddar cheese, tomato, lettuce, onions.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/983-swiss-cheese.png',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Grilled Chicken',
             'description' => 'grilled chicken breast, cheddar cheese, tomato, white oregano.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/989-grilled.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Cheese',
             'description' => 'beef patty, cheddar cheese, tomato, onion, pickles, black, red paper.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/994-pepper----cheese.png ',
             'price' => 40.00
         ]);
         DB::table('products')->insert([
             'name' => 'Veggier',
             'description' => 'fresh grilled vegetables, broccoli, tomato, lettuce, onion, fresh cucumber.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1000-veggie.png',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Mignon Steak',
             'description' => 'mignon steak, build yours.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1005-midnon-steak.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'BBQ Grilled Chicken',
             'description' => 'grilled chicken breast, rucola and barbecue sauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1010-bbq-grilled-chicken.png',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Steak',
             'description' => 'cognac and pepper sauce, grilled bell pepper, tomato, onion, cheddar cheese.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1015-pepper-steak.png',
             'price' => 35.00
         ]);
         DB::table('products')->insert([
             'name' => 'Tuscan Style',
             'description' => 'tomato, rucola, figs, prosciutto.',
             'photo' => ' https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1020-tuscan----style.png',
             'price' => 40.00
         ]);

    }
}

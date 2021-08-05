<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'name' => 'Pizza 1',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 2',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 3',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 4',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 5',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 6',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 7',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);

        DB::table('pizzas')->insert([
            'name' => 'Pizza 8',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);
        
        DB::table('pizzas')->insert([
            'name' => 'Pizza 9',
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pizza1.jpg'
        ]);
        
    }
}

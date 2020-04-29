<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(array('name' => 'Playstation'));
        Category::create(array('name' => 'Xbox'));
        Category::create(array('name' => 'Nintendo'));
        Category::create(array('name' => 'PC'));
        Category::create(array('name' => 'Movil'));
    }
}

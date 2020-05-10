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
        Category::create(array('name' => 'Playstation','icon'=>'fab fa-playstation'));
        Category::create(array('name' => 'Xbox','icon'=>'fab fa-xbox'));
        Category::create(array('name' => 'Nintendo','icon'=>'fas fa-gamepad'));
        Category::create(array('name' => 'Multi Consola','icon'=>'fas fa-headset'));
        Category::create(array('name' => 'PC','icon'=>'fab fa-steam'));
        Category::create(array('name' => 'Movil','icon'=>'fas fa-mobile-alt'));
    }
}

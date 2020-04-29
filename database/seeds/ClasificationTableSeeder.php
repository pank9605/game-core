<?php

use Illuminate\Database\Seeder;
use App\Clasification;

class ClasificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Clasification::create(array('name' => 'Noticia'));
        Clasification::create(array('name' => 'Reseña'));
        Clasification::create(array('name' => 'Especial'));
        Clasification::create(array('name' => 'Podcast'));
        Clasification::create(array('name' => 'Unboxing'));
    }
}

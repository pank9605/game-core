<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(\App\User::class,50)->create();
        //factory(\App\Address::class,50)->create();

        User::create(array('username' => 'pank9605','name' => 'Eduardo','first_name' => 'Chávez','last_name' => 'Zúñiga',
            'birthdate' => '1996/05/29','gender' => 'Masculino','email' => 'pank9605@hotmail.com','password' => bcrypt(12345678),'cover_image' => null,
            'porfile_image' => null,'role_id' => '1'));

        Address::create(array('street' => 'Allende','colony' => 'Raúl Romero','city' => 'Nezahualcóyotl','interior_number' => '2',
            'outdoor_number' => '7','zip'=>'57630','phone' => '656565','cellphone' => '5555489656','user_id' => '1',));

        User::create(array('username' => 'monderjay','name' => 'noof','first_name' => 'Chávez','last_name' => 'Zúñiga',
            'birthdate' => '1996/05/29','gender' => 'Masculino','email' => 'monderjay@outlook.com','password' => bcrypt(12345678),'cover_image' => null,
            'porfile_image' => null,'role_id' => '1'));

        Address::create(array('street' => 'Allende','colony' => 'Raúl Romero','city' => 'Nezahualcóyotl','interior_number' => '2',
            'outdoor_number' => '7','zip'=>'57630','phone' => '656565','cellphone' => '5555489656','user_id' => '2',));


        User::create(array('username' => 'kantus','name' => 'kantus','first_name' => 'Chávez','last_name' => 'Zúñiga',
            'birthdate' => '1996/05/29','gender' => 'Masculino','email' => 'kantus@outlook.com','password' => bcrypt(12345678),'cover_image' => null,
            'porfile_image' => null,'role_id' => '2'));

        Address::create(array('street' => 'Allende','colony' => 'Raúl Romero','city' => 'Nezahualcóyotl','interior_number' => '2',
            'outdoor_number' => '7','zip'=>'57630','phone' => '656565','cellphone' => '5555489656','user_id' => '3',));

        //factory(\App\News::class,50)->create();
        //factory(\App\NewsImage::class,300)->create();


        //factory(\App\Role::class,10)->create();*/


        /*$roles = factory(App\Role::class,3)->create();

        $roles->each(function ($role) {
            $users = factory(\App\User::class,20)->make();
            $role->users()->saveMany($users);

        });*/
    }
}

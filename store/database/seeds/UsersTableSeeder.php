<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = factory(App\Models\User::class, 3)->create();

    	$userDefault = App\Models\User::create([
    		'name' => 'User',
    		'email' => 'user@laravel.com',
    		'password' => bcrypt('sarasara'),
    		'address' => 'Negdje u Mostaru 123',
    		'phone' => '12345123',
    		'birthday' => '1984/09/11',
    		'gender' => 'male',
    		'status' => '1',
    		'token' => str_random(60),
    	]);
    }
}

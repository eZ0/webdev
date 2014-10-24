<?php
class UsersTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();


        $user = User::create(array(
            'email' => 'ra@ra.be',
            'username' => 'Rabbit',
            'password' => '1234'
        ));

        $user = User::create(array(
            'email' => 'ksenia.karelskaya@student.kdg.be',
            'username' => 'Pony',
            'password' => '1234'
        ));

        $user = User::create(array(
            'email' => 'kusksu@gmail.com',
            'username' => 'Zebra',
            'password' => '1234'
        ));
    } 
}
<?php
 
class UserTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Andri Riantana',
            'username' => 'seputarpemrograman',
            'email'    => 'seputarpemrograman@gmail.com',
            'password' => Hash::make('qwerty'),
        ));
    }
 }
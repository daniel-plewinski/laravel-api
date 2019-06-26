<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'test_user',
            'email' => 'testuser@email.com',
            'password' => bcrypt('1234')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$kbyIAB2NpHXqyyr1EgZYPOIVA44EJE4YHkW3gpO1ZITBfwqArIluu'
        ];
        User::insert($users);
    }
}

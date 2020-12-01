<?php

use App\User;
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
        $users = [
            [
                'id' => 1,
                'name' => 'Project Manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('manager'),
                'is_manager' => 1,
                'remember_token' => null,

            ],
            [
                'id' => 2,
                'name' => 'Normal User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'is_manager' => 0,
                'remember_token' => null,

            ],
        ];
        User::insert($users);
    }
}

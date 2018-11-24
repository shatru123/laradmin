<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Shatrughna Ambhore',
            'email' => 'ambhoreshatrughna@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole('administrator');

    }
}

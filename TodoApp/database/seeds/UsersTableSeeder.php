<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'e1@example.com',
            'name' => 'nena',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'email' => 'e2@example.com',
            'name' => 'nena2',
            'password' => bcrypt('123456')
        ]);
    }
}

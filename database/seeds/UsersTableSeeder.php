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
        \App\Models\User::create([
            'name' => 'admin',
            'age' => 18,
            'email' => 'admin@fresher.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}

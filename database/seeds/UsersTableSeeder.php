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
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10) .'@gmail.com',
                'password' => Hash::make('password123')
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10) .'@gmail.com',
                'password' => Hash::make('password124')
            ]
        ]);
    }
}

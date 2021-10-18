<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kedai Zombie',
            'email' => bcrypt('admin@admin.com'),
            'password' => 'password', // password
            'remember_token' => Str::random(10)
        ]);
    }
}

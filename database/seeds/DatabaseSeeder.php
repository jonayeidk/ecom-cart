<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' =>"admin@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$FXYwUeb3S7aHOp8IgvOyZeFDW.5xy4BWoy3AbmIhViLBLFZJLdp4C', // password
            'remember_token' => Str::random(10),
        ]);    
    }
}

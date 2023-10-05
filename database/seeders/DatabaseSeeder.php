<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'name' => 'Admin',
                'email' => 'ing.korozco@gmail.com',
                'password' => bcrypt('Q@10op29+'),
            ]
        );
    }
}
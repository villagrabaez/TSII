<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();

        User::factory()->create(
            [
                'name' => 'Bernardino',
                'email' => 'email@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admin12345'), // password
                'remember_token' => Str::random(10),
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Create one user with role 'admin'
        User::factory()->create();

        // If you want to create more than one user, use:
        User::factory()->count(5)->create(); // To create 5 users
    }
}
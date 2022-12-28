<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
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
        // \App\Models\UserController::factory(10)->create();

        // \App\Models\UserController::factory()->create([
        //     'name' => 'Test UserController',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(3)->create();
        Category::factory(4)->create();
    }
}

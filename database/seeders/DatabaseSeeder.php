<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Role::create(['name' => 'admin']);
        \App\Models\Role::create(['name' => 'super-admin']);
        \App\Models\Role::create(['name' => 'manager']);
        \App\Models\Role::create(['name' => 'supervisor']);
        \App\Models\Role::create(['name' => 'accountant']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

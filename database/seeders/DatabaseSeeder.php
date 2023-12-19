<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Tenant::factory(3)->create();
        \App\Models\User::factory(5)->create();
        \App\Models\Admin\Truck::factory(6)->create();

        \App\Models\User::factory()->create([
            'token' => Str::uuid(),
            'first_name' => 'Leandro',
            'last_name' => 'Ferreira Oliveira',
            'email' => 'lfoadm@icloud.com',
        ]);
    }
}

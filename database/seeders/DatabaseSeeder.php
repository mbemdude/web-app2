<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'      => 'Admin',
            'email'     => 'admin@bakkah.sch.id',
            'password'  => Hash::make('bismillah')
        ]);

        \App\Models\Santri::factory(50)->create();

        // \App\Models\Spp::factory(50)->create();
    }
}

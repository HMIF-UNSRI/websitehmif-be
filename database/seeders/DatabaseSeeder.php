<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DepartementSeeder::class,
            DivisionSeeder::class,
            WorkProgramSeeder::class,
            AdministrasiSeeder::class,
            AkademikSeeder::class,
            IntiSeeder::class,
            KastradSeeder::class,
            KominfoSeeder::class,
            KewirausahaanSeeder::class,
            PmbSeeder::class,
            PsdmSeeder::class,
            UserSeeder::class
        ]);
    }
}

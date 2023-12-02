<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centre;
use App\Models\Alumnat;
use App\Models\Professorat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Centre::factory(30)->create();
        Alumnat::factory(30)->create();
        Professorat::factory(30)->create();
    }
}

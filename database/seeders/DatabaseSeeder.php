<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Livre;
use App\Models\Auteur;
use App\Models\Emprunteur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Nous générons ici 5 auteurs et chaque auteur a 10 livres
        // 5 auteurs et 50 livres

        Auteur::factory()
            ->count(5)
            ->has(Livre::factory()->count(10))
            ->create();



        // Nous générons ici 20 emprunteurs

        Emprunteur::factory()
            ->count(20)
            ->create();


    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('team')->insert([
        //     'Nom' => "RealMadrid",
        //     'Ville' => "Madrid",
        //     'Pays' => "Spain",
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);


        // DB::table('team')->insert([
        //     'Nom' => "ROMA",
        //     'Ville' => "Roma",
        //     'Pays' => "Italie",
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);


        DB::table('player')->insert([
            'Nom' => "Leonel",
            'Prenom' => "Messi",
            'Age' => 39,
            'Poids' => 60,
            'Pied' => "L",
            'Taille' => 12,
            'Team_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}

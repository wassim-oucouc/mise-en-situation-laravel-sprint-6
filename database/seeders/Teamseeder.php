<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teamseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team')->insert([
            'Nom' => "RealMadrid",
            'Ville' => "Madrid",
            'Pays' => "Spain"
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//add to seed pages
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre_names = ["rap", "klassiek", "rock", "pop", "house"];
        for ($i=0; $i < 5; $i++) { 
            DB::table('genres')->insert([
                "name" => $genre_names[$i],
            ]);
        }
    }
}

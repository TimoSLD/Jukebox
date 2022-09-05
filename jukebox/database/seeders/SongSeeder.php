<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//add to seed pages
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            "name" => "Fur Elise",
            "description" => "klassiek liedje",
            "artist" => "Beethoven",
            "genre_id" => 1,
            "length" => "00:03:43",
        ]);

        Song::factory()->count(25)->create();
    }
}

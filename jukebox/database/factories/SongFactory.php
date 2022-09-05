<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    protected $model = Song::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            "description" => $this->faker->unique()->text(),
            "artist" => $this->faker->unique()->name(),
            "genre_id" => $this->faker->numberbetween(1, 5),
            "length" => $this->faker->unique()->time($format = "H:i:s"),
        ];
    }
}

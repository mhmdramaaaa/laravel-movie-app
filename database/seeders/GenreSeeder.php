<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'shounen',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought'
        ]);

        Genre::create([
            'name' => 'school',
            'description' => 'It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.'
        ]);

        Genre::create([
            'name' => 'romance',
            'description' => 'The story of love and affection between the characters in it is very close to everyday life.'
        ]);

        Genre::create([
            'name' => 'comedy',
            'description' => 'humorous work that generally aims to entertain, cause laughter, especially in television, film and comedy.'
        ]);
    }
}

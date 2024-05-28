<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Review::create([
            'movie_id' => '1',
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'User' => 'Sutando Tsukai',
            'Rating' => '4/5',
            'Date' => '26 November 2007'
        ]);
        Review ::create([
            'movie_id' => '2',
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'User' => 'Yato',
            'Rating' => '3,5/5',
            'Date' => '17 Februari 2014'
            
        ]);
        Review::create([
            'movie_id' => '3',
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'User' => 'Yongseok Jo',
            'Rating' => '3/5',
            'Date' => '4 April 2024'
        ]);
        Review::create([
            'movie_id' => '4',
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'User' => 'Loid Forger',
            'Rating' => '4,5/5',
            'Date' => '7 Oktober 2023'
        ]);
        Review::create([
            'movie_id' => '5',
            'title' => 'Naruto',
            'poster' => 'movie-5.jpg',
            'User' => 'Uzumaki',
            'Rating' => '5/5',
            'Date' => '15 Februari 2007'
        ]);
    }
}

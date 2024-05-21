<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'jojo Bizarre Advanture',
            'poster' => 'movie-01.jpg',
            'User' => 'Sutando Tsukai',
            'Rating' => '4/5',
            'Date' => '26 November 2007'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'User' => 'Yato',
            'Rating' => '3,5/5',
            'Date' => '17 Februari 2014'
            
        ],
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'User' => 'Yongseok Jo',
            'Rating' => '3/5',
            'Date' => '4 April 2024'
        ],
        [
            'id' => 4,
            'movie' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'User' => 'Loid Forger',
            'Rating' => '4,5/5',
            'Date' => '7 Oktober 2023'
        ],
        [
            'id' => 5,
            'movie' => 'Naruto',
            'poster' => 'movie-5.jpg',
            'User' => 'Uzumaki',
            'Rating' => '5/5',
            'Date' => '15 Februari 2007'
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}



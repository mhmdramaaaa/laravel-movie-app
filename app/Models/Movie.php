<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'jojo Bizarre Advanture',
            'poster' => 'movie-01.jpg',
            'genre' => 'shounen',
            'synopsis' => 'Jojos Bizarre Advanture is a story about the joestar family'
        ],
        [
            'id' => 2,
            'title' => 'Noragmi',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings'
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}



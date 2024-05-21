<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'title' => 'jojo Bizarre Advanture',
            'poster' => 'movie-01.jpg',
            'Description' => 'JoJo Bizarre Adventure adalah manga inovatif yang terkenal dengan karakternya yang aneh, humor yang liar, dan pertempuran yang hingar bingar.'
        ],
        [
            'id' => 2,
            'title' => 'Noragmi',
            'poster' => 'movie-02.jpg',
            'Description' => 'adalah sebuah serial manga Jepang karya Adachitoka yang memulai serialisasi di Monthly Shōnen Magazine pada Januari 2011.'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'Description' => 'Pada Wind Breaker ini berfokus pada Haruka Sakura yang tak ingin berurusan dengan orang lemah, ia hanya tertarik pada orang yang kuat.'
        ],
        [
            'id' => 4,
            'title' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'Description' => 'Spy x Family mengisahkan tentang agen mata-mata terampil bernama sandi Twillight yang menjalankan Operasi Strix, yakni misi penting terkait perdamaian antarnegara mencakup Westalis di barat dan Ostania di timur.'
        ],
        [
            'id' => 5,
            'title' => 'Naruto',
            'poster' => 'movie-5.jpg',
            'Description' => 'Menurut cerita, Naruto adalah seorang ninja dari desa Konoha (Konohagakure), sebuah desa fiktif yang konon tersembunyi di antara rimbunnya dedaunan hutan'
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}



<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', [MovieController::class, 'index']);


Route::get('/create', function () {
    return view('movies.create');
});

Route::get('/genres', [GenreController::class, 'index']);


Route::get('/reviews', [ReviewController::class, 'index']);



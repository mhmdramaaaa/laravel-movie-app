<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    public function index()
    {
        
        // $reviews = Review::all();
       $reviews =  Review::All();

        return view('reviews.index', compact('reviews'));
    }
}
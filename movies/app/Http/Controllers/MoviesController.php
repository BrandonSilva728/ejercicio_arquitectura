<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\UseCases\GetMoviesUseCase;
use Illuminate\Support\Facades\View;

class MoviesController extends Controller
{
    public $moviesUseCase;

    public function __construct(GetMoviesUseCase $moviesUseCase)
    {
        $this->moviesUseCase = $moviesUseCase;   
    }

    public function Handle()
    {
        $movies = $this->moviesUseCase->__invoke();
        return view('welcome')->with($movies);
    }
}

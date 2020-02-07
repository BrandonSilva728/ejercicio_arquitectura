<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\UseCases\GetMoviesUseCase;

class MoviesController extends Controller
{
    /**
     * @var mixed
     */
    public $moviesUseCase;

    /**
     * @param GetMoviesUseCase $moviesUseCase
     */
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

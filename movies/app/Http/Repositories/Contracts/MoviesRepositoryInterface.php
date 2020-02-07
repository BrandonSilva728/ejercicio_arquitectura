<?php
namespace App\Http\Repositories\Contracts;

Use App\Movie;

interface MoviesRepositoryInterface
{
    public function getMovies(): Movie;
}

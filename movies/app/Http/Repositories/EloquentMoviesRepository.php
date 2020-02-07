<?php
namespace App\Http\Repositories;

use App\Movie;
use App\Http\Repositories\Contracts\MoviesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

final class EloquentMoviesRepository implements MoviesRepositoryInterface
{
    private $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }
    public function getMovies(): Collection
    {
        return $this->movie->all();
    }
}

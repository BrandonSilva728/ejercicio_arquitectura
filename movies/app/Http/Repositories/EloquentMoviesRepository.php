<?php
namespace App\Http\Repositories;

use App\Movie;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Repositories\Contracts\MoviesRepositoryInterface;

final class EloquentMoviesRepository implements MoviesRepositoryInterface
{
    /**
     * @var mixed
     */
    private $movie;

    /**
     * @param Movie $movie
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * @return mixed
     */
    public function getMovies(): Collection
    {
        return $this->movie->all();
    }
}

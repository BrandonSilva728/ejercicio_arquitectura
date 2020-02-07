<?php
namespace App\Http\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface MoviesRepositoryInterface
{
    public function getMovies(): Collection;
}

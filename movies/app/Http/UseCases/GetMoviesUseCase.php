<?php

namespace App\Http\UseCases;

use App\Http\Repositories\Contracts\MoviesRepositoryInterface;

final class GetMoviesUseCase
{
    public $repository;

    public function __construct(MoviesRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->getMovies();        
    }
    
}

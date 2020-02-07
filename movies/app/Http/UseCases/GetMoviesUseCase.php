<?php

namespace App\Http\UseCases;

use App\Http\Repositories\Contracts\MoviesRepositoryInterface;

final class GetMoviesUseCase
{
    /**
     * @var mixed
     */
    public $repository;

    /**
     * @param MoviesRepositoryInterface $repository
     */
    public function __construct(MoviesRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function __invoke()
    {
        return $this->repository->getMovies();
    }

}

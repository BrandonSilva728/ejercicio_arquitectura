<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\MoviesRepositoryInterface;
use App\Http\Repositories\EloquentMoviesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MoviesRepositoryInterface::class,
            EloquentMoviesRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Http\Repositories\Eloquent\Post\PostEloquentRepository;
use App\Http\Repositories\Eloquent\Post\PostRepositoryInterface;
use App\Http\Services\PostService;
use App\Http\Services\PostServiceInterface;
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
        $this->app->singleton(
            PostRepositoryInterface::class,
            PostEloquentRepository::class
        );
        $this->app->singleton(
            PostServiceInterface::class,
            PostService::class
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

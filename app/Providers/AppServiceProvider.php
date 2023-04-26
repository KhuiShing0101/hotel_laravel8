<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\HomeRepositoryInterface;
use App\Repository\HomeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CsvRepositoryInterface;
use App\Repositories\CsvRepository;

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
            CsvRepositoryInterface::class,
            CsvRepository::class
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

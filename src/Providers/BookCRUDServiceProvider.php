<?php

namespace Nic07drag\BookCRUD\Providers;

use Illuminate\Support\ServiceProvider;
use Nic07drag\BookCRUD\Services\BookService;
use Nic07drag\BookCRUD\Repositories\BookRepository;
use Nic07drag\BookCRUD\Services\BookServiceContract;
use Nic07drag\BookCRUD\Providers\RouteServiceProvider;
use Nic07drag\BookCRUD\Repositories\BookRepositoryContract;

class BookCRUDServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = "book-crud";
        //routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //view
        $this->loadViewsFrom(__DIR__.'/../resources/views', $package_name);
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/' . $package_name),
        ]);
        //migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        /*
        |--------------------------------------------------------------------------
        | Route Providers need on boot() method, others can be in register() method
        |--------------------------------------------------------------------------
        */
        $this->app->register(RouteServiceProvider::class);
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Binding from part 9
        $this->app->bind(BookRepositoryContract::class, BookRepository::class);
        $this->app->bind(BookServiceContract::class, BookService::class);
    }
}

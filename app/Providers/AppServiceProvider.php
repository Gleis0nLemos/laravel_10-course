<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SupportEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupportRepositoryInterfacerface::class, SupportEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

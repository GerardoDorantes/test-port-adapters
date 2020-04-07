<?php

namespace App\Providers;

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
            'UCREA\Application\Repositories\VoteRepositoryInterface',
            'UCREA\Infrastructure\EloquentVoteRepository'
        );
        $this->app->bind(
            'UCREA\Application\Repositories\SongRepositoryInterface',
            'UCREA\Infrastructure\SongRepository'
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

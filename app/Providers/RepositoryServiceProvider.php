<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repos = [
        'Category',
        'Product',
        'Order',
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->repos as $repo) {
            $this->app->bind(
                "App\Repositories\Contracts\\" . $repo . "RepositoryInterface",
                "App\Repositories\Eloquents\\" . $repo . "Repository"
            );
        }
    }
}

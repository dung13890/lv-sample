<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register binding to container.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register in here.
        $this->registerServices();

    }

    public function registerServices()
    {
        // Binding repositories.
        $factory = 'Eloquent';
        $models = [
            'User',
        ];

        foreach ($models as $model) {
            $this->app->singleton(
                "App\\Contracts\\{$model}Repository",
                "App\\Repositories\\{$factory}{$model}Repository"
            );
        }
    }
}

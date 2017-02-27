<?php

namespace Group_F\Demo_20_02;

use Illuminate\Support\ServiceProvider;

class Demo_20_02ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Group_F\Demo_20_02\Demo_20_02Controller');
    }
}

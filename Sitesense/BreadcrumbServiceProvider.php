<?php

namespace Sitesense\Breadcrumb;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/ViewComposers/' => app_path('Http/ViewComposers')
        ], 'viewcomposers');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeBreadcrumbs();
    }

    public function composeBreadcrumbs()
    {
        View::composer('partials._breadcrumbs', 'App\Http\ViewComposers\BreadcrumbViewComposer');
    }
}

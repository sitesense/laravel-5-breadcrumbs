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
            __DIR__.'/resources/views/partials' => resource_path('views/partials')
        ], 'viewpartial');
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
        View::composer('partials._breadcrumbs', 'Sitesense\Http\ViewComposers\BreadcrumbViewComposer');
    }
}

## Laravel 5 Breadcrumbs

Simple customizable breadcrumbs for Laravel >= 5.5

## Installation

DO NOT USE YET - UNDER FURTHER DEVELOPMENT

Require the package with composer.

```shell
composer require sitesense/breadcrumb
```

Now you need to publish the partial view file which will save to '/resources/views/partials/_breadcrumbs.blade.php'
The breadcrumbs use the default Bootstrap 4 styling. If you wish to change this you can edit the view.

```shell
php artisan vendor:publish --provider="Sitesense\Breadcrumb\BreadcrumbServiceProvider"
```
## Usage

Place this in your views where you would like the breadcrumbs to appear:


```shell
@include('partials._breadcrumbs')
```

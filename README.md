## Laravel 5 Breadcrumbs

Simple customizable breadcrumbs for Laravel >= 5.5

## Installation

DO NOT USE YET - UNDER FURTHER DEVELOPMENT

Require the package with composer.

```shell
composer require sitesense/breadcrumb
```

The breadcrumbs use the default Bootstrap 4 styling.
If you wish to change this you can publish and edit the view.

```shell
php artisan vendor:publish --provider="Sitesense\Breadcrumb" --tag="view"
```
## Usage

Place this in your views where you would like the breadcrumbs to appear:


```shell
@include('partials._breadcrumbs')
```

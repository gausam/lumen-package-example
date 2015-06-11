# Example Lumen Package

A simple [Lumen](http://lumen.laravel.com) Package highlighting one or two gotchas if you're building directly from the [Laravel 5 package](laravel.com/docs/5.0/packages) docs.

Has a single controller and route (/package).

Add the following to your app.php to register the [service provider](http://lumen.laravel.com/docs/providers)

```php

	$app->register('Ihatehandles\Sweet\SweetServiceProvider');

```
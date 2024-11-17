# Installation

You can install the package via composer:

```bash
composer require solution-forest/filament-newsletter
```


You can register this plugin and its widgets through your panel provider:

```php
public function panel(Panel $panel): Panel
{
    return $panel
        ->widgets([
            \SolutionForest\FilamentNewsletter\Filament\Widgets\Dashboard\TotalSubscribers::class,
            \SolutionForest\FilamentNewsletter\Filament\Widgets\Dashboard\CompletedCampaigns::class,
            \SolutionForest\FilamentNewsletter\Filament\Widgets\Dashboard\RecentSubscribers::class,
        ])
        ->plugins([
            \SolutionForest\FilamentNewsletter\FilamentNewsletterPlugin::make()
        ]);
}
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-newsletter-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-newsletter-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-newsletter-views"
```

## Running the queue without Laravel Horizon
If you don't want to use Horizon to manage you redis queue or you're using the database driver you will have to run a queue worker for each queue that Filaletter uses.

default: processes default queues
sendportal-message-dispatch: dispatches messages to the email service
sendportal-webhook-process: processes incoming webhooks
```php
php artisan queue:work
php artisan queue:work --queue=sendportal-message-dispatch
php artisan queue:work --queue=sendportal-webhook-process
```

You may also run a single worker with processing priority:

```php
php artisan queue:work --queue=default,sendportal-message-dispatch,sendportal-webhook-process
```

## Running Redis Queues With Laravel Horizon
SendPortal bundles Laravel Horizon as an easy way to run and manage redis queues.

Configuration for the queues necessary to run SendPortal is already included. In order to use Horizon as your queue manager, you should first publish the Horizon assets:

```php
php artisan horizon:publish
```
To start processing your queue items with Horizon, you simply need to run the following command:

```php
php artisan horizon
```

## Running the Scheduler Locally

```php
php artisan schedule:work
```

## Support for SQLite

To use this package with SQLite, the following code could be added to AppServiceProvider:

```php
if (DB::connection() instanceof SQLiteConnection) {
    DB::connection()->getPdo()->sqliteCreateFunction('date_format', function ($date, $format) {
        return date($format, strtotime($date));
    }, 2);

    DB::connection()->getPdo()->sqliteCreateFunction('FROM_UNIXTIME', function ($unixtime) {
        return date('Y-m-d H:i:s', $unixtime);
    }, 1);

    DB::connection()->getPdo()->sqliteCreateFunction('UNIX_TIMESTAMP', function ($date) {
        return strtotime($date);
    }, 1)
}
```


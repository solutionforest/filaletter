# Subscribers
## Overview

Subscribers are individuals you can target when sending campaigns. Each subscriber can be assigned to one or more segments, and their email addresses must be unique within each workspace.

## Adding and Updating Subscribers

You can add or update subscribers through:

- The admin panel manually
- Importing data
- Using the API programmatically

### Segments

Assign segments to subscribers using the Segments selector. If segments are available, you can choose which ones to assign. Note that the selected segments will apply to all subscribers in the uploaded CSV. Currently, you cannot specify different segments for individual subscribers.

### Messages

Any messages sent to a subscriber will be listed in the Messages section.

## Unsubscribing

### Manually Unsubscribing

To manually unsubscribe a subscriber, go to the subscriber edit page, uncheck Subscribed, and click Save.

### Unsubscribe Links

Filaletter can automatically insert unsubscribe links into your templates and campaigns. Refer to the templates section for more details.

When a user clicks the unsubscribe link, they will be directed to a web page to confirm their unsubscription. Upon confirmation, they will see a message confirming their unsubscription and an option to resubscribe.

## Import and Export Actions

This feature is supported by [Filament import action](https://filamentphp.com/docs/3.x/actions/prebuilt-actions/import) and [Filament export action](https://filamentphp.com/docs/3.x/actions/prebuilt-actions/export). It requires job batches and database notifications, so the following migrations are necessary:

```php
# Laravel 11 and higher
php artisan make:queue-batches-table
php artisan make:notifications-table
```

```php
# Laravel 10
php artisan queue:batches-table
php artisan notifications:table
```

```php
# All apps
php artisan vendor:publish --tag=filament-actions-migrations
php artisan migrate
```

### Import Columns

The following columns are supported for import:

- `email`
- `first_name`
- `last_name`
- `meta` (optional, JSON format)
- `unsubscribed_at` (optional, date format, present if the subscriber has unsubscribed)
- `unsubscribe_event_id` (optional, one of the following types: `1` for Bounced, `2` for Complained, `3` for Manual by Admin, `4` for Manual by Subscriber)
- `workspace_id` (optional, defaults to the current workspace ID in the panel)
- `hash` (optional, updates an existing subscriber if found, otherwise creates a new record with a new UUID)

### Enabling Database Notifications for Import and Export Actions

To receive notifications about import and export actions, enable database notifications in a panel's configuration:

```php
public function panel(Panel $panel): Panel
{
    return $panel->databaseNotifications();
}
```

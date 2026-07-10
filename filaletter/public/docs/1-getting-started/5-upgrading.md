# Upgrading

This guide outlines the steps required to upgrade from a previous version of the package.

---

## Upgrading from Version 1.x to 2.x

Version 2.x introduces support for mail tracking via the `jdavidbakr/mail-tracker` package.
Additionally, custom placeholders are now supported for template and campaign content, allowing for greater flexibility and personalization.

### Compatibility Notice
Version 2.0 requires the Filament Admin panel version 3.3 or higher. Ensure your project is updated to meet this requirement before proceeding with the upgrade steps.

### 📚 Steps for Upgrading

1. **Backup Your Configuration**  
    Back up your existing `config/filament-newsletter.php` file to preserve any customizations. After backing up, delete the file to ensure the new configuration is applied correctly.

2. **Publish the Mail Tracker Resources**  
    Publish the configuration file and migrations for the mail tracker package:

    ```bash
    php artisan vendor:publish --provider="jdavidbakr\MailTracker\MailTrackerServiceProvider"
    ```

3. **Publish and Run New Migrations**  
    Publish the necessary migrations and apply them to your database:

    ```bash
    php artisan vendor:publish --tag="filament-newsletter-migrations"
    php artisan migrate
    ```

4. **Publish the Configuration File**  
    Publish the updated configuration file for the newsletter package:

    ```bash
    php artisan vendor:publish --tag="filament-newsletter-config"
    ```

By following these steps, you can successfully upgrade to version 2.x while ensuring all new features and configurations are properly integrated.

---



## Upgrading from Version 2.x to 3.x
Version 3.x introduces support for Automation and support for Laravel 12.


### 📚 Steps for Upgrading

1. **Backup Your Configuration**  
    Back up your existing `config/filament-newsletter.php` file to preserve any customizations. After backing up, delete the file to ensure the new configuration is applied correctly.
2. **Publish and Run New Migrations**  
    Publish the necessary migrations and apply them to your database:

    ```bash
    php artisan vendor:publish --tag="filament-newsletter-migrations"
    php artisan migrate
    ```

3. **Publish the Configuration File**  
    Publish the updated configuration file for the newsletter package:

    ```bash
    php artisan vendor:publish --tag="filament-newsletter-config"
    ```

By following these steps, you can successfully upgrade to version 3.x while ensuring all new features and configurations are properly integrated.

---



## Upgrading from Version 3.x to 4.x
This release brings full compatibility with **Filament ^4.0** and includes significant improvements to the testing infrastructure.

### ⚠️ Breaking Changes

- **Minimum Requirements**: Laravel 11+ and Filament 4.0+
- **For Filament v3.x users**: Please stay on Filament Newsletter v3.x, which will continue to receive updates and security patches

### 📦 Version Compatibility

- **v4.0+**: Filament ^4.0|^5.0 + Laravel ^11.0
- **v3.x**: Filament ^3.0 + Laravel ^10.0

### 🔄 Additional Package Updates

If you are using `solution-forest/filament-unlayer`, please also update to `solution-forest/filament-unlayer ^2.0` for Filament v4 compatibility.

### 📚 Steps for Upgrading
Additional steps are not needed for your upgrade.

---



## Upgrading to v4.1.0 or v3.2.0 (Improved General Campaign Defaults)


> **Note:** This guide applies to upgrades from versions:
> - To **v3.2.0** in the v3.x series.
> - To **v4.1.0** in the v4.x series.

Previously, there were no general settings for campaigns, requiring users to manually fill in all details for every new campaign.  
With this update, you can now specify **default settings** for:

- **Default Email Service for Campaigns**
- **Default "From" Address for Campaigns**
- **Default Template for Campaigns**

These defaults will be automatically applied when creating new campaigns, streamlining your workflow and reducing repetitive input.




---
### 📚 Steps for Upgrading




## 1. Publish New Migrations and Translation

Run the following command to publish the latest migrations for the newsletter package:

```sh
php artisan vendor:publish --tag=filament-newsletter-migrations
```

Optionally, update your translation file. If you already have a translation file, delete it and republish to ensure you have the latest updates.
Run the following command to publish the latest translations for the newsletter package:

```sh
php artisan vendor:publish --tag=filament-newsletter-translations
```



---

## 2. Run Migrations

Apply the new migrations to your database:

```sh
php artisan migrate
```

---

## 3. Update Configuration

Please be noted that the models for email services and email templates are updated.

If you do not use any related custom models, open `config/filament-newsletter.php` and ensure your models is set as follows:

```php
'models' => [
    'template' => Models\NewsletterTemplate::class,
    'email-service' => Models\EmailService::class,
],
```

If you have customized these models, follow `4. Custom Email Service Model Changes` and `5. Custom Email Template Model Changes` to update your customized models.

---

## 4. Custom Email Service Model Changes (optional)

If you use a custom email service model, make sure it:

- Extends `SolutionForest\FilamentNewsletter\Models\EmailService`
- Adds `"is_default"` to the `$fillable` array
- Adds `'is_default' => 'boolean'` to the `$casts` array
- Implements the following boot method to ensure only one default per workspace:

```php
protected static function boot()
{
    parent::boot();

    static::saved(function ($record) {
        if ($record->is_default) {
            static::query()
                ->where('workspace_id', $record->workspace_id)
                ->where('id', '!=', $record->id)
                ->update(['is_default' => false]);
        }
    });

    static::created(function ($record) {
        if ($record->is_default) {
            static::query()
                ->where('workspace_id', $record->workspace_id)
                ->where('id', '!=', $record->id)
                ->update(['is_default' => false]);
        }
    });
}
```

---

## 5. Custom Email Template Model Changes (optional)

If you use a custom email template model, make sure it:

- Extends `SolutionForest\FilamentNewsletter\Models\NewsletterTemplate`
- Adds `"is_default"` to the `$fillable` array (if you have fillable array)
- Adds `'is_default' => 'boolean'` to the `$casts` array
- Implements the following boot method to ensure only one default per workspace:

```php
protected static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        $model->workspace_id = empty($model->workspace_id) ? Sendportal::currentWorkspaceId() : (int) $model->workspace_id;
    });

    static::saved(function ($record) {
        if ($record->is_default) {
            static::query()
                ->where('workspace_id', $record->workspace_id)
                ->where('id', '!=', $record->id)
                ->update(['is_default' => false]);
        }
    });

    static::created(function ($record) {
        if ($record->is_default) {
            static::query()
                ->where('workspace_id', $record->workspace_id)
                ->where('id', '!=', $record->id)
                ->update(['is_default' => false]);
        }
    });
}
```


# Upgrading

This guide outlines the steps required to upgrade from a previous version of the package.

## Upgrading from Version 1.x to 2.x

Version 2.x introduces support for mail tracking via the `jdavidbakr/mail-tracker` package.
Additionally, custom placeholders are now supported for template and campaign content, allowing for greater flexibility and personalization.

### Steps for Upgrading

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



## Upgrading from Version 2.x to 3.x
Version 3.x introduces support for Automation and support for Laravel 12.


### Steps for Upgrading

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


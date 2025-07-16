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

- **v4.0+**: Filament ^4.0 + Laravel ^11.0
- **v3.x**: Filament ^3.0 + Laravel ^10.0 (still maintained)

### 🔄 Additional Package Updates

If you are using `solution-forest/filament-unlayer`, please also update to `solution-forest/filament-unlayer ^2.0` for Filament v4 compatibility.

### 📚 Steps for Upgrading
Additional steps are not needed for your upgrade.

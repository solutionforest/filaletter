# Getting a license
To use this package, you must purchase a license.

# Installation via Composer

To get started with the Filament CMS Website Plugin, follow these steps:

1. Add the package to your `composer.json` file in the repositories key:

    ```json
    {
        "repositories": [
            {
                "type": "composer",
                "url": "https://filament-newsletter.composer.sh"
            }
        ]
    }
    ```

2. Once the repository has been added to the `composer.json` file, install the Filament CMS Website Plugin like any other composer package using the `composer require` command:

    ```sh
    composer require solution-forest/filament-newsletter
    ```

3. You will be prompted to provide your username and password. The username will be your email address and the password will be your license key. For example, let's say we have the following licensee and license activation:

    - **Contact email:** philo@anystack.sh
    - **License key:** 8c21df8f-6273-4932-b4ba-8bcc723ef500

    Enter the following information when prompted for your credentials:

    ```
    Loading composer repositories with package information
    Authentication required (filament-cms-website-plugin.composer.sh):
    Username: philo@anystack.sh
    Password: 8c21df8f-6273-4932-b4ba-8bcc723ef500:anystack.sh
    ```

    To clarify, the license key and fingerprint should be separated by a colon (`:`).

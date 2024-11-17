# Getting a license
To use this package, you must purchase a license.

# Requirements

In order to distribute your PHP package you must make sure a valid composer.json is located in the root of your repository. If you attempt to import or publish a release without a valid composer.json you will receive an notification.

# Installation via Composer

To get started with the Filaletter Plugin, follow these steps:

1. Add the package to your `composer.json` file in the repositories key:

    ```json
    {
        "repositories": [
            {
            "type": "composer",
            "url": "https://filasend.composer.sh"
            }
        ],
    }
    ```

2. Once the repository has been added to the `composer.json` file, install the Filaletter Plugin like any other composer package using the `composer require` command:

    ```sh
    composer require solution-forest/filament-newsletter
    ```

3. Once the repository has been added to the composer.json file, they can install Filaletter like any other composer package using the composer require command:

    ```
    Loading composer repositories with package information
    Authentication required (filasend.composer.sh):
    Username: [licensee-email]
    Password: [license-key]
    ```

    You will be prompted to provide their username and password. The username will be their email address and the password will be equal to their license key. Our license policy requires a fingerprint that you will need to append his/her fingerprint to their license key. 
    
    For example, let's say we have the following licensee and license activation:

    Contact email: philo@anystack.sh
    License key: 8c21df8f-6273-4932-b4ba-8bcc723ef500
    Activation fingerprint: anystack.sh

    This will require your licensee to enter the following information when prompted for their credentials:

    ```
    Loading composer repositories with package information
    Authentication required (filasend.composer.sh):
    Username: philo@anystack.sh
    Password: 8c21df8f-6273-4932-b4ba-8bcc723ef500:anystack.sh
    ```

    To clarify, the license key and fingerprint should be separated by a colon (`:`).


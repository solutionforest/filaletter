# API

## Public API Routes
By default, the public API routes, including webhooks for SES, Mailgun, Postmark, SendGrid, Mailjet, and Postal, are registered for you.
The public API routes includes the following:
1. Webhook for SES
2. Webhook for Mailgun
3. Webhook for Postmark
4. Webhook for Sendgrid
5. Webhook for Mailjet
6. Ping test api

### Testing the API
You can easily test your API by performing a GET request against the /ping endpoint:

```php
GET /api/v1/ping
```

If your API is working correctly, then this will return a 200 response with the string ok in the body content. Note that this endpoint does not require any authentication.

## Private API Routes
The private API related to templates, subscribers, segments and campagins are prepared for you. Please see the related documents to see how to register and implement authentication for the routes. Authentication for the API is performed on a per-workspace basis, and tokens for each workspace should be set up to use this feature.

### Registering the api routes
You can register the predefined private API routes as follows:

```php
use Sendportal\Base\Facades\Sendportal;
use SolutionForest\FilamentNewsletter\Middleware\Authentication;

Route::middleware([
    config('filament-newsletter.throttle_middleware') ?? 'throttle:60,1',
    Authentication::class,
])->group(function () {
    // Authenticated API routes (workspace-level authentication).
    Sendportal::apiRoutes();
});
```
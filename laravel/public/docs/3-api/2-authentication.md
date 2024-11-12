# Authentication for Private API Routes
Authentication for the API is performed on a per-workspace basis by supplying a token with the API request.

### Generating Tokens

To view your existing tokens, or to generate a new token, perform the following steps for each of your Workspaces:

1. Visit the edit workspace page.
3. In the relation manager section, you will see a list of any previously generated API tokens.
4. You can add a new token and optionally provide a description for the token.
5. You will now be able to use the generated token to authenticate with the API for the current workspace.

### Bearer Token

The preferred way to authenticate with the API during a request is to use the token as a Bearer token. This is performed by supplying an `Authorization` header with the request, where the value is `Bearer {api_token}`.

**Example:**

```
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
```

### API Token Parameter

Alternatively, you can authenticate by providing the token as a parameter when making the request. The token parameter should be keyed as `api_token` where the value is `{api_token}`.

**GET Example:**

```
/api/v1/ping?api_token=9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
```

**POST Example:**

```json
{
    "api_token": "9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ"
}
```

### Throttling
You can set the throttling rate as following:
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

When this limit is exceeded, a `429 Too Many Requests` response will be returned.

The limit can be configured by editing the `filament-newsletter.throttle_middleware` key in the config file. The value needs to be in the format `throttle:{number_of_requests},{every_X_minutes}`.

For example, this would limit the API to 1000 requests every 5 minutes:

```
'throttle_middleware' => 'throttle:1000,5'
```

For more information on rate limiting, see the official [Laravel documentation](https://laravel.com/docs/11.x/rate-limiting).



## Using Laravel Sanctum
You can use [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum) to protect your API routes.

```php
use Sendportal\Base\Facades\Sendportal;

Route::middleware('auth:sanctum')->group(function () {
    Route::middleware([
        config('filament-newsletter.throttle_middleware') ?? 'throttle:60,1',
    ])->group(function () {
        // Authenticated API routes (workspace-level authentication).
        Sendportal::apiRoutes();
    });
});
```
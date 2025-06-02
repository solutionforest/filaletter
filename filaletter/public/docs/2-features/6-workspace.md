# Workspace
Workspaces enable you to manage distinct subscriber lists and campaigns for various projects. For example, you might have one workspace for your personal website's mailing list and another for your podcast.

## Default Workspace

Upon installation, a default workspace is automatically created and set. The workspace ID resolver will attempt to retrieve the current workspace ID from the session, using the default workspace ID as a fallback. You can change the default workspace ID by updating the `workspace_id_fallback` value in the configuration.

## Register the workspace switcher to topbar

A Livewire component for switching workspaces is available for your convenience. By default, this component is registered to the topbar. You can enable or disable this feature or change its position by modifying the configuration.

Alternatively, you can manually register the workspace switcher through your application's service provider:

```php
public function boot(): void
{
    FilamentView::registerRenderHook(
        PanelsRenderHook::GLOBAL_SEARCH_AFTER,
        fn() => \Illuminate\Support\Facades\Blade::render("@livewire('switch-workspace')"),
    );
}
```

## API Tokens

You can create and delete API tokens for each workspace. These API tokens can be used in private API routes. See [API Authentication]([[app_url]]/documentation/3-api/2-authentication) to learn more.


## Extending the Current Workspace ID Resolver

The workspace ID resolver determines which workspace is currently active for a user or API request. By default, the resolver checks for an API token in the request, then the session, and finally falls back to a default value from the configuration.

If you need to customize how the current workspace ID is resolved, you can override the resolver logic. For example, you might want to resolve the workspace ID based on a custom request parameter or user attribute.

To set a custom resolver, use the following approach in your service provider:

```php
Sendportal::setCurrentWorkspaceIdResolver(function () {
    // Your custom logic to determine the workspace ID
    // Example: return request()->get('custom_workspace_id') ?? config('filament-newsletter.workspace_id_fallback');
});
```

The default resolver logic is as follows:

1. Checks for an API token in the request's bearer token or `api_token` parameter, and resolves the workspace ID using the token if present.
2. Checks the session for a configured workspace ID session key and returns its value if found.
3. Falls back to a default workspace ID from the configuration if neither of the above are present.

You can refer to the `setCurrentWorkspaceIdResolver` method in the `FilamentNewsletterServiceProvider` for the default implementation.

This flexibility allows you to adapt workspace resolution to your application's specific requirements.
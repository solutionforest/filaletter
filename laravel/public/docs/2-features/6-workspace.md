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
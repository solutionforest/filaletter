# Filaletter Subscription Form (JS)

This guide shows you how to easily embed Filaletter subscription forms anywhere on your website using JS components.

## Minimum Requirement
**version 3.1.0**


## 1. Including the JS File
After including the JS File, run the following command to publish the assets:

```bash
php artisan filament:asset
```
Include the JS file in your Blade or HTML (after your theme and Tailwind CSS):

```blade
<script src="{{ asset('js/solution-forest/filament-newsletter/filaletter-forms.js') }}"></script>
```

---

## 2. Minimal Setup Example

Just add a `<div>` with the required attributes:

```blade
<div
  filaletter-key="homepage-signup"
  filaletter-sendportal-api-token="YOUR_API_KEY"
  filaletter-url="{{ route('sendportal.api.subscribers.store') }}"
  filaletter-workspace-id="{{ \Sendportal\Base\Facades\Sendportal::currentWorkspaceId() }}"
></div>
<script src="{{ asset('js/solution-forest/filament-newsletter/filaletter-forms.js') }}"></script>
```

**Required:**
- `filaletter-key` (You can use any unique key you like. The JS will auto-generate a complete subscription form inside each `<div>` that has the `filaletter-key` attribute.)
- `filaletter-sendportal-api-token` (See [Api authentication](../3-api/2-authentication) to learn more.)
- `filaletter-url` (use your API endpoint)
- `filaletter-workspace-id` 

---

## 3. Full Customization Example

```blade
<div
  filaletter-key="homepage-signup"                  # Unique identifier for this form instance (required)
  filaletter-theme="rounded"                        # Theme style for the form (default, minimal, rounded, inline, dark, glass)
  filaletter-sendportal-api-token="YOUR_API_KEY"    # Your API token for authentication (required)
  filaletter-url="{{ route('sendportal.api.subscribers.store') }}" # API endpoint to submit the form (required)
  filaletter-workspace-id="{{ \Sendportal\Base\Facades\Sendportal::currentWorkspaceId() }}" # Workspace ID (required)
  filaletter-tag-id="123"                           # Tag ID to associate with the subscriber (optional)
  filaletter-placeholder="Your best email"           # Placeholder text for the email input (optional)
  filaletter-button-text="Join Now"                  # Text for the submit button (optional)
  filaletter-subscribing-text="Joining..."           # Text shown while submitting (optional)
  filaletter-success-text="Thank you for subscribing!" # Success message (optional)
  filaletter-error-text="Could not subscribe. Please try again." # Error message (optional)
  filaletter-network-error-text="Network error. Please check your connection." # Network error message (optional)
  filaletter-form-class="my-form"                    # Extra CSS class for the form (optional)
  filaletter-form-style="border: 2px solid #00bcd4;" # Inline style for the form (optional)
  filaletter-input-class="my-input"                  # Extra CSS class for the input (optional)
  filaletter-input-style="background: #e0f7fa;"      # Inline style for the input (optional)
  filaletter-button-class="my-btn"                   # Extra CSS class for the button (optional)
  filaletter-button-style="font-weight: bold;"       # Inline style for the button (optional)
  filaletter-msg-class="my-msg"                      # Extra CSS class for the message (optional)
  filaletter-msg-style="font-size:18px;"             # Inline style for the message (optional)
></div>
<script src="{{ asset('js/solution-forest/filament-newsletter/filaletter-forms.js') }}"></script>
```

**Variable Descriptions:**

| Attribute                        | Description                                                                                 |
|----------------------------------|---------------------------------------------------------------------------------------------|
| `filaletter-key`                 | Unique identifier for the form instance (required)                                           |
| `filaletter-theme`               | Theme style for the form: `default`, `minimal`, `rounded`, `dark`, `glass`        |
| `filaletter-sendportal-api-token`| Your API token for authentication (required, see [Api authentication](../3-api/2-authentication) to learn more.  )                                               |
| `filaletter-url`                 | API endpoint to submit the form (required)                                                   |
| `filaletter-workspace-id`        | Workspace ID (optional, for multi-workspace setups)                                          |
| `filaletter-tag-id`              | Tag ID to associate with the subscriber (optional)                                           |
| `filaletter-placeholder`         | Placeholder text for the email input (optional)                                              |
| `filaletter-button-text`         | Text for the submit button (optional)                                                        |
| `filaletter-subscribing-text`    | Text shown while submitting (optional)                                                       |
| `filaletter-success-text`        | Success message (optional)                                                                   |
| `filaletter-error-text`          | Error message (optional)                                                                     |
| `filaletter-network-error-text`  | Network error message (optional)                                                             |
| `filaletter-form-class`          | Extra CSS class for the form (optional)                                                      |
| `filaletter-form-style`          | Inline style for the form (optional)                                                         |
| `filaletter-input-class`         | Extra CSS class for the input (optional)                                                     |
| `filaletter-input-style`         | Inline style for the input (optional)                                                        |
| `filaletter-button-class`        | Extra CSS class for the button (optional)                                                    |
| `filaletter-button-style`        | Inline style for the button (optional)                                                       |
| `filaletter-msg-class`           | Extra CSS class for the message (optional)                                                   |
| `filaletter-msg-style`           | Inline style for the message (optional)                                                      |

---

## 4. Minimal Example for Each Theme

Just change the `filaletter-theme` attribute:
### Default
![default](../../images/capscreens/form-js/default.png)
```html
<div
    filaletter-key="default-demo"
    filaletter-sendportal-api-token="YOUR_TOKEN"
    filaletter-url="/api/subscribe"
    filaletter-theme="default"
></div>
```

### Minimal
![minimal](../../images/capscreens/form-js/minimal.png)
```html
<div
    filaletter-key="minimal-demo"
    filaletter-sendportal-api-token="YOUR_TOKEN"
    filaletter-url="/api/subscribe"
    filaletter-theme="minimal"
></div>
```

### Rounded
![rounded](../../images/capscreens/form-js/rounded.png)
```html
<div
    filaletter-key="rounded-demo"
    filaletter-sendportal-api-token="YOUR_TOKEN"
    filaletter-url="/api/subscribe"
    filaletter-theme="rounded"
></div>
```

### Dark
![dark](../../images/capscreens/form-js/dark.png)
```html
<div
    filaletter-key="dark-demo"
    filaletter-sendportal-api-token="YOUR_TOKEN"
    filaletter-url="/api/subscribe"
    filaletter-theme="dark"
></div>
```

### Glass
![glass](../../images/capscreens/form-js/glass.png)
```html
<div
    filaletter-key="glass-demo"
    filaletter-sendportal-api-token="YOUR_TOKEN"
    filaletter-url="/api/subscribe"
    filaletter-theme="glass"
></div>
```

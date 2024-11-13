# Templates

## Overview

Templates make it easy for you to reuse content and designs across your campaigns. For example, you may want to create a template for your monthly newsletter. This helps maintain consistent email design and reduces the effort needed to prepare your newsletter each month. Our dynamic templating system also allows you to insert subscriber details into your templates, such as their name.

## View Templates

To view a listing of your templates, click the **Templates** link in the sidebar. This will take you to the templates index page.

## Creating and Updating Templates

To add a template, navigate to the templates index page and then click the **New Template** button.

A template requires the following:

- A name
- Contents of the template

The contents of a template must be valid HTML. Additionally, the template must include a `{{content}}` placeholder to inject the contents of a campaign. To set the placeholder, include the following at the desired place in your template:

```
{{content}}
```

When sending a campaign, the campaign's content will be substituted for this placeholder.

## Placeholders

In addition to the required `{{content}}` placeholder, the following placeholders are available in templates:

- `{{email}}` – The subscriber's email
- `{{first_name}}` – The subscriber's first name (if set)
- `{{last_name}}` – The subscriber's last name (if set)
- `{{unsubscribe_url}}` – A URL generated to allow the subscriber to unsubscribe
- `{{webview_url}}` – A URL generated to allow the subscriber to view the message in a web view

### URL Placeholders

The URL placeholders (`{{unsubscribe_url}}` and `{{webview_url}}`) generate the URL only; they do not create a clickable link such as an HTML anchor tag. This means that simply placing one of these placeholders in the template will result in the URL being displayed as plain text. You need to create an appropriate anchor tag and include the URL as the `href` property if you wish to create clickable links. For example:

```html
<a href="{{unsubscribe_url}}">Click here to unsubscribe</a>
```

## Inline CSS Styles

Although external stylesheets and embedded styles (i.e., including the styles in the `<head>` of an HTML page) work well for web pages, many email clients will ignore or strip out these elements.

Filaletter automatically inlines all of your CSS styles when the emails are dispatched. You can therefore continue to use the convenience of CSS and/or embedded styles in your templates, but still ensure that your emails display correctly for your subscribers.

If your template contains CSS and inline styles, the inline styles will be retained, and the CSS and/or embedded styles will be added to the existing inline styles.
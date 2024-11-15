# SendGrid

## Sending Emails

To send emails using the Twilio SendGrid provider, you will need a SendGrid account. If you don't already have one, visit the [SendGrid website](https://sendgrid.com) and sign up. No credit card is required, and you can get up to 100 free emails per month.

Once registered, open the Setup Guide, choose the Web API integration, and select the PHP language option.

![SendGrid Setup Guide](https://sendportal.io/img/docs/providers/sendgrid/sendgrid-1.png)

Generate an API key and copy it to your SendPortal configuration.

![Generate API Key](../../images/providers/sendgrid/sendgrid-2.png)

Check the "I've integrated the code above" box and click Next.

Send a test email from SendPortal, and if it works successfully, click Verify integration.

## Tracking

![Tracking Settings](https://sendportal.io/img/docs/providers/sendgrid/sendgrid-3.png)

Open and click tracking is enabled by default in SendGrid, but if you'd like to check the settings, you'll find them under **Settings > Tracking**.

![Tracking Settings](https://sendportal.io/img/docs/providers/sendgrid/sendgrid-4.png)

You can also enable subscription tracking from this page. If enabled, SendGrid will automatically add unsubscribe links to the bottom of every email you send.

![Subscription Tracking](https://sendportal.io/img/docs/providers/sendgrid/sendgrid-5.png)

To enable tracking within Filaletter, you'll need to enable event notifications from **Settings > Mail Settings**.

The HTTP POST URL depends on your domain but must end with `/api/v1/webhooks/sendgrid`. For example, if Filaletter is installed at `https://campaigns.marketing.com`, then each webhook should point to `https://campaigns.marketing.com/api/v1/webhooks/sendgrid`.

That's it! You're now set up to send and track emails using SendGrid.
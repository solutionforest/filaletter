# Mailjet

## Sending Emails

To send emails using the Mailjet provider, you will need a Mailjet account. If you don't already have an account, visit the [Mailjet website](https://www.mailjet.com/) to create one.

The Mailjet Free plan offers you 200 emails a day, which is enough to cover your basic needs if you are a small sender.

When you first begin, you need to add and configure the "From:" email address, also known as the Sender Address. Extensive documentation for this step is available [here](https://documentation.mailjet.com/hc/en-us/articles/360042133934-How-to-Add-and-Verify-a-Sender-Domain-or-Email-Address).

Finally, to integrate SendPortal with Mailjet, you need to copy the API Key and the API Secret Key, which are generated automatically when your account is created, into your SendPortal provider configuration.

![Mailjet Configuration](https://sendportal.io/img/docs/providers/mailjet/mailjet-1.png)

Alternatively, if you don't want to use the Master API Key (which grants full access to your account), you can set up Sub-account API Keys and limit their scope.

## Tracking

By default, the tracking options for opens and clicks are activated for all new accounts. These settings can be changed on your Account Preferences page, but keep in mind that SendPortal will always override them with the values that you choose in the application when creating a new campaign.

To enable tracking, you will have to set up Webhooks from the Account Information page.

![Mailjet Webhooks](https://sendportal.io/img/docs/providers/mailjet/mailjet-2.png)

The URL depends on your domain but must end with `/api/v1/webhooks/mailjet`. For example, if SendPortal is installed at `https://campaigns.marketing.com`, then each webhook should point to `https://campaigns.marketing.com/api/v1/webhooks/mailjet`.

You'll need to add an entry for each type of event you want to track, but the URL is the same for each one of them.

If you want to limit the number of calls, you can choose to group together events that occurred over the last second. SendPortal is able to handle both single and grouped events.

That's it! You're now set up to send and track emails using Mailjet.
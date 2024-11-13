# Postmark

## Sending Email

To send emails using the Postmark provider, you will need a Postmark account. If you don't already have an account, visit the Postmark website and click the **Start Free Trial** button in the top right corner of the screen.

Postmark will automatically create a server for you, called **My First Server**. Click on the server and select the **API Tokens** tab.

![Postmark API Tokens](https://sendportal.io/img/docs/providers/postmark/postmark-1.png)

Copy the string from **Server API tokens** and create a provider within Filaletter.

![Create Provider](https://sendportal.io/img/docs/providers/postmark/postmark-2.png)

Next, navigate to **Sender Signatures** and select the option to **Add Domain**.

![Add Domain](https://sendportal.io/img/docs/providers/postmark/postmark-3.png)

Enter your domain name and click **Verify domain**.

![Verify Domain](https://sendportal.io/img/docs/providers/postmark/postmark-4.png)

You'll now need to visit the site that you use to manage DNS for the domain provided (usually the domain registrar). The steps to do this are beyond the scope of this documentation as they vary from provider to provider, but you will need to create a TXT entry for the relevant domain and paste in the strings from the **Hostname** and **Add this value** columns.

![DNS Entry](https://sendportal.io/img/docs/providers/postmark/postmark-5.png)

Once you've added the entry with your DNS provider, click the **Verify** button and the DKIM status should transition to **Verified**. It can take some time to make this transition, but if it doesn't work ensure you didn't accidentally copy and paste any whitespace at the beginning or end of either string.

![DKIM Verified](https://sendportal.io/img/docs/providers/postmark/postmark-6.png)

To configure email tracking, select the server from the **Servers** page, select the **Transactional (Default Transactional Stream)** stream from the list of Message Streams.

![Transactional Stream](https://sendportal.io/img/docs/providers/postmark/postmark-7.png)

Select the **Webhooks** tab and click **Add webhook**.

![Add Webhook](https://sendportal.io/img/docs/providers/postmark/postmark-8.png)

The Webhook URL depends on your domain, but must end with `/api/v1/webhooks/postmark`. For example, if SendPortal is installed at `https://campaigns.marketing.com`, then each webhook should point to `https://campaigns.marketing.com/api/v1/webhooks/postmark`.

![Webhook URL](https://sendportal.io/img/docs/providers/postmark/postmark-9.png)

You'll also need to enable open tracking and link tracking from the stream settings.

![Enable Tracking](https://sendportal.io/img/docs/providers/postmark/postmark-10.png)

That's it! You're now set up to send and track emails using Postmark.

## Message Streams

Filaletter enables the use of Postmark message streams. You can supply this in the **Message Stream** field when adding Postmark as an Email Service. If you do not wish to use Message Streams you can leave this field blank.
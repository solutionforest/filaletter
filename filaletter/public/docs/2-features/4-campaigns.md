# Campaigns Overview
A campaign is a set of individual email messages that are sent to your subscribers. Examples include a new product launch or a regular newsletter.

## Prerequisites

Before creating a campaign, ensure the following are configured:

- At least one email service.
- A list of subscribers to target with your campaign.
- An email template for your campaign (optional, but recommended).

## Viewing Campaigns

To view your campaigns, click the **Campaigns** link in the sidebar. This will take you to the campaigns index page.

## Starting New Campaigns

Navigate to the campaigns index page and click the **New Campaign** button.

### Fields

- **Campaign Name**: A friendly name for your campaign used within SendPortal. Example: "Newsletter - May 2020".
- **Subject**: The subject of your campaign email. It can include placeholders like {{first_name}}, {{last_name}}, and {{email}}. Refer to the Placeholders section of the Templates documentation for more information.
- **From Name**: The email sender name, indicating who sent the message.
- **From Email**: The "from" address seen by recipients. It must match the settings for the selected email service.
- **Template (optional)**: The template for your campaign email.
- **Track Opens**: Determines if individual email opens are tracked. Requires webhooks configuration.
- **Track Clicks**: Determines if individual email clicks are tracked. Requires webhooks configuration.
- **Content**: The body of your campaign email. It can include placeholders. Refer to the Placeholders section of the Templates documentation.

Once the form is filled out, click **Save and Continue**. Your campaign will be marked as a Draft.

## Sending Campaigns

Campaigns are dispatched from the preview page.

### Test Email

Send a test email to see how it will appear to recipients. Enter an email address in the Recipient field and click **Send Test Email**.

### Sending Options

- **Recipients**: Dispatch your campaign to your entire subscriber list or specific tags.
- **Schedule**: Schedule your campaign to be dispatched immediately or at a later date and time.
- **Sending Behaviour**:
    - **Queue Draft**: Generates messages as drafts, requiring individual dispatch from the Messages section. Recommended for complex templates but not for large subscriber lists.
    - **Send Automatically**: Generates and dispatches messages automatically.

If your campaigns do not send, ensure scheduled tasks and queue workers are configured as described in the Installation guide.

# Quick Start: Sending Your First Campaign with Filament Newsletter

This guide walks you through the steps to send your first email campaign using Filament Newsletter within your FilamentPHP admin panel.

## 1. Create an Email Service:

Filament Newsletter integrates with various email providers: Mailgun, Mailjet, Amazon SES, SendGrid, Postmark, and SMTP.

* Navigate to the "Email Services" section in your Filament admin panel.
* Click "Create Email Service."
* Select your desired provider and fill in the required credentials.  These vary by provider for detailed setup instructions for each provider.
* Test your connection using the "Test Email" feature, providing a "To" and "From" address.

## 2. Add or Import Subscribers:

You need subscribers to send your campaigns.  Here are three ways to add them:

* **Manually:**  Go to "Subscribers" in the sidebar, click "New Subscriber," enter their email address, ensure "Subscribed" is checked, and click "Save."
* **API:** Use the Filament Newsletter API to add subscribers programmatically.
* **CSV Import:** Import subscribers in bulk from a CSV file. 

For more details, see the [Subscriber Documentation](../../documentation/2-features/1-subscribers).

## 3. Create a Segment (Optional):

Segments allow you to group subscribers for targeted campaigns.

* Go to "Segments," click "Create Segment," and give your segment a name.
* On the segment edit page, use the relation manager to add subscribers to the segment.

## 4. Create a Template:

Templates ensure consistent branding across your campaigns.

* Navigate to "Templates" and click "Add Template."
* Your template should be valid HTML and *must* include the `{{content}}` tag, where your campaign content will be inserted.
* See the [Template Documentation](add link to template documentation) for more details.

You can also create campaigns *without* a template if you prefer.

## 5. Create a Campaign:

* Go to "Campaigns" and click "New Campaign."
* Select your template (if you created one).  The campaign content you enter will be placed within the `{{content}}` tag of the template.
* Refer to the [Campaign Documentation](add link to campaign documentation) for further information.

## 6. Send Your Campaign:

Review your campaign before sending:

* **Recipients:** Choose "All Subscribers" or select specific segments.
* **Schedule:** Send immediately or schedule for a specific date and time.
* **Sending Behavior:**
    * **Save as Draft:**  Save individual emails as drafts for manual review and sending.  Access these in the "Draft Messages" section.
    * **Send Immediately:**  Send emails as soon as the system is ready.

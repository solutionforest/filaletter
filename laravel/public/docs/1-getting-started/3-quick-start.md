# Quick Start
## Introduction
The following guide will walk you through sending out your first campaign. 

## Create An Email Service
This package integrates with Mailgun, Mailjet, Amazon SES, Sendgrid, Postmark and SMTP.

Go to the email service section to create an email service.

The required information will vary between each service. Full instructions on how to set up each service can be found in the email service documentation.

## Test Email
You can test the email service by entering an to address and from address in the Test Email section.


## Add Or Import Subscribers
In order for SendPortal to send emails, you need to set up lists of subscribers. These subscribers can be added in 3 ways:

- Manually
- Through the API
- CSV Import
To add a single subscriber manually, goto the Subscribers section from the sidebar, and then click New Subscriber. You will need to provide an email address for the subscriber and ensure that Subscribed is checked. Once you are happy with your subscriber, click Save.

Refer to the subscriber documentation for more information.

## Create A Segment and add the subscribers to the segment
Create a segment and navigate to the edit segment page. Use the relation manager to add subscribers to the segment.

## Create A Template
A template allows you to create consistent branding for all your campaigns, so that you only need to create new content for each campaign.

Campaigns can be created without a template as well, if desired.

To create a template, click on the Templates link in the sidebar and then click the Add Template button. Templates should contain valid HTML and must include at least a {{content}} tag.

Refer to the templates documentation for more information.

## Create A Campaign
To create a campaign, click on the Campaigns link in the sidebar and then click the New Campaign button.

If you have created a template in the previous step, you can select it here. The content will be placed into the {{content}} tag in the template.

Refer to the campaign documentation for more information.

## Send The Campaign
After your campaign has been created, you will have a chance to review it before sending.

## Recipients
Specify who the campaign should be sent to; either All Subscribers, or those with one or more segments assigned to them.

## Schedule
Choose to dispatch the campaign immediately or at a specific and date and time.

## Sending Behaviour
Finally, you can choose to save each individual email as a draft message, or send it out immediately.

Choosing to save the message as a draft means you will will need to review and send each individual message before it is sent out. Go to the draft messages section to send the pending messages for each subscriber.

Choosing to send the messages immediately will dispatch each message as soon as SendPortal is ready to do so.




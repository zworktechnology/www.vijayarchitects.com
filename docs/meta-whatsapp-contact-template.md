# Meta WhatsApp Contact Template

Use this template in WhatsApp Manager before enabling the live Contact Us notification flow.

Suggested template setup:

- Template name: `website_form_admin_alert`
- Category: `UTILITY`
- Language: `English (US)`

Template body:

```text
New website enquiry received.

Details:
{{1}}

Better Luck
```

Sample value for approval:

1. `Name: Ravi Kumar | Phone: +919876543210 | Email: ravi@example.com | Subject: Residence design enquiry | Message: Need GRC support for our new plant`

Env values expected by the code:

```dotenv
WHATSAPP_ACCESS_TOKEN=
WHATSAPP_PHONE_NUMBER_ID=
WHATSAPP_API_URL=https://graph.facebook.com/v21.0
WHATSAPP_RECIPIENT_NUMBER=919171711513
WHATSAPP_TEMPLATE_NAME=website_form_admin_alert
WHATSAPP_TEMPLATE_LANGUAGE=en_US
```

Notes:

- `WHATSAPP_RECIPIENT_NUMBER` must be in international format without `+` or spaces.
- `WHATSAPP_TEMPLATE_NAME` must exactly match the approved template name in Meta.
- The code sends a single body parameter in this format: `Name: ... | Phone: ... | Email: ... | Subject: ... | Message: ...`
- If you later want to send the message to the customer instead of the office/admin number, change the `to` value in the contact controller to the submitted phone number after collecting the required WhatsApp opt-in.

# Campaigns

## Campaign Object

- **data**: object
- **id**: int (readonly)
- **name**: string
- **subject**: string
- **content**: string
- **status_id**: int (readonly)
- **template_id**: int
- **email_service_id**: int
- **from_name**: string
- **from_email**: string
- **is_open_tracking**: bool
- **is_click_tracking**: bool
- **sent_count**: int (readonly)
- **open_count**: int (readonly)
- **click_count**: int (readonly)
- **send_to_all**: bool
- **tags**: array
- **save_as_draft**: bool
- **scheduled_at**: datetime
- **created_at**: datetime (readonly)
- **updated_at**: datetime (readonly)

## Index

Retrieve a paginated list of all campaigns.

### Usage

- **Endpoint**: `GET /api/v1/campaigns`
- **Expected Response Code**: 200
- **Response Fields**: `array<Campaign Object>`

### Sample Request

```
GET /api/v1/campaigns HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```

### Sample Response

```json
{
        "data": [
                {
                        "id": 1,
                        "name": "name",
                        "subject": "My Campaign Subject",
                        "content": "My Email Content",
                        "status_id": 1,
                        "template_id": 1,
                        "email_service_id": 1,
                        "from_name": "SendPortal",
                        "from_email": "test@sendportal.io",
                        "is_open_tracking": true,
                        "is_click_tracking": true,
                        "sent_count": 0,
                        "open_count": 0,
                        "click_count": 0,
                        "send_to_all": true,
                        "tags": [],
                        "save_as_draft": false,
                        "scheduled_at": "2020-07-24 08:46:54",
                        "created_at": "2020-07-24 08:23:38",
                        "updated_at": "2020-07-24 09:43:42"
                }
        ],
        "links": {
                "first": "https://filaletter.test/api/v1/campaigns?page=1",
                "last": "https://filaletter.test/api/v1/campaigns?page=1",
                "prev": null,
                "next": null
        },
        "meta": {
                "current_page": 1,
                "from": 1,
                "last_page": 1,
                "path": "https://filaletter.test/api/v1/campaigns",
                "per_page": 25,
                "to": 1,
                "total": 1
        }
}
```

## Show

Get details of a single campaign.

### Usage

- **Endpoint**: `GET /api/v1/campaigns/{campaignId}`
- **Expected Response Code**: 200
- **Response Fields**: `Campaign Object`

### Sample Request

```
GET /api/v1/campaigns/1 HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```

### Sample Response

```json
{
        "data": {
                "id": 1,
                "name": "name",
                "subject": "My Campaign Subject",
                "content": "My Email Content",
                "status_id": 1,
                "template_id": 1,
                "email_service_id": 1,
                "from_name": "SendPortal",
                "from_email": "test@sendportal.io",
                "is_open_tracking": true,
                "is_click_tracking": true,
                "sent_count": 0,
                "open_count": 0,
                "click_count": 0,
                "send_to_all": true,
                "tags": [],
                "save_as_draft": false,
                "scheduled_at": "2020-07-24 08:46:54",
                "created_at": "2020-07-24 08:23:38",
                "updated_at": "2020-07-24 09:43:42"
        }
}
```

## Store

Create a new campaign.

### Usage

- **Endpoint**: `POST /api/v1/campaigns`
- **Expected Response Code**: 201
- **Request Fields**:
    - **name**: string
    - **subject**: string
    - **content**: string
    - **template_id**: int
    - **email_service_id**: int
    - **from_name**: string
    - **from_email**: string
    - **is_open_tracking**: bool (optional)
    - **is_click_tracking**: bool (optional)
    - **send_to_all**: bool (optional)
    - **tags**: array<int> (optional)
    - **save_as_draft**: bool (optional)
- **Response Fields**: `Campaign Object`

### Sample Request

```
POST /api/campaigns HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
        "subject": "My New Campaign",
        "subject": "My New Campaign Subject",
        "content": "My New Email Content",
        "template_id": "1",
        "email_service_id": "1",
        "from_name": "SendPortal",
        "from_email": "test@sendportal.io",
        "is_open_tracking": "1",
        "is_click_tracking": "1",
        "send_to_all": "1",
        "save_as_draft": "0",
        "scheduled_at": "2020-07-24 08:46:54"
}
```

### Sample Response

```json
{
        "data": {
                "id": 1,
                "name": "name",
                "subject": "My New Campaign Subject",
                "content": "My New Email Content",
                "status_id": 1,
                "template_id": 1,
                "email_service_id": 1,
                "from_name": "SendPortal",
                "from_email": "test@sendportal.io",
                "is_open_tracking": true,
                "is_click_tracking": true,
                "sent_count": 0,
                "open_count": 0,
                "click_count": 0,
                "send_to_all": true,
                "tags": [],
                "save_as_draft": false,
                "scheduled_at": "2020-07-24 08:46:54",
                "created_at": "2020-07-24 08:23:38",
                "updated_at": "2020-07-24 08:23:38"
        }
}
```

## Update

Update a campaign.

### Usage

- **Endpoint**: `PUT /api/v1/campaigns/{campaignId}`
- **Expected Response Code**: 200
- **Request Fields**:
    - **name**: string
    - **subject**: string
    - **content**: string
    - **template_id**: int
    - **email_service_id**: int
    - **from_name**: string
    - **from_email**: string
    - **is_open_tracking**: bool (optional)
    - **is_click_tracking**: bool (optional)
    - **send_to_all**: bool (optional)
    - **tags**: array<int> (optional)
    - **save_as_draft**: bool (optional)
- **Response Fields**: `Campaign Object`

### Sample Request

```
PUT /api/v1/campaigns/2 HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
        "subject": "My New Campaign Subject",
        "content": "My New Email Content"
}
```

### Sample Response

```json
{
        "data": {
                "id": 1,
                "name": "name",
                "subject": "My New Campaign Subject",
                "content": "My New Email Content",
                "status_id": 1,
                "template_id": 1,
                "email_service_id": 1,
                "from_name": "SendPortal",
                "from_email": "test@sendportal.io",
                "is_open_tracking": true,
                "is_click_tracking": true,
                "sent_count": 0,
                "open_count": 0,
                "click_count": 0,
                "send_to_all": true,
                "tags": [],
                "save_as_draft": false,
                "scheduled_at": "2020-07-24 08:46:54",
                "created_at": "2020-07-24 08:23:38",
                "updated_at": "2020-07-24 09:43:42"
        }
}
```

## Send

Send a campaign.

### Usage

- **Endpoint**: `POST /api/v1/campaigns/{campaignId}/send`
- **Expected Response Code**: 200
- **Request Fields**: None
- **Response Fields**: `Campaign Object`

### Sample Request

```
POST /api/v1/campaigns/2/send HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json
```

### Sample Response

```json
{
    "data": {
        "id": 1,
        "name": "name",
        "subject": "My New Campaign Subject",
        "content": "My New Email Content",
        "status_id": 2,
        "template_id": 1,
        "email_service_id": 1,
        "from_name": "SendPortal",
        "from_email": "test@sendportal.io",
        "is_open_tracking": true,
        "is_click_tracking": true,
        "sent_count": 0,
        "open_count": 0,
        "click_count": 0,
        "send_to_all": true,
        "tags": [],
        "save_as_draft": false,
        "scheduled_at": "2020-07-24 08:46:54",
        "created_at": "2020-07-24 08:23:38",
        "updated_at": "2020-07-24 09:43:42"
    }
}
```
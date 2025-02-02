# Subscribers

## Index
Retrieve a paginated list of all subscribers.

### Usage
**Endpoint**  
`GET /api/v1/subscribers`

**Expected Response Code**  
`200`

### Response Fields
- `data`: array
- `id`: int
- `first_name`: string
- `last_name`: string
- `email`: string
- `unsubscribed_at`: datetime
- `created_at`: datetime
- `updated_at`: datetime

### Sample Request
```
GET /api/v1/subscribers HTTP/1.1
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
                        "first_name": "Test",
                        "last_name": "Subscriber",
                        "email": "testsubscriber@example.com",
                        "unsubscribed_at": null,
                        "created_at": "2020-03-23 13:44:09",
                        "updated_at": "2020-03-23 13:44:09"
                },
                {
                        "id": 2,
                        "first_name": "Test",
                        "last_name": "Subscriber Two",
                        "email": "testsubscriber2@example.com",
                        "unsubscribed_at": "2020-08-02 08:07:08",
                        "created_at": "2020-03-23 13:50:39",
                        "updated_at": "2020-03-23 13:50:39"
                }
        ],
        "links": {
                "first": "https://filaletter.test/api/v1/subscribers?page=1",
                "last": "https://filaletter.test/api/v1/subscribers?page=1",
                "prev": null,
                "next": null
        },
        "meta": {
                "current_page": 1,
                "from": 1,
                "last_page": 1,
                "path": "https://filaletter.test/api/v1/subscribers",
                "per_page": 25,
                "to": 2,
                "total": 2
        }
}
```

## Show
Retrieve the details of a single subscriber, including its tags.

### Usage
**Endpoint**  
`GET /api/v1/subscribers/{subscriberId}`

**Expected Response Code**  
`200`

### Response Fields
- `data`: object
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `tags`: array<object>
        - `id`: int
        - `name`: string
        - `created_at`: datetime
        - `updated_at`: datetime
    - `unsubscribed_at`: datetime
    - `created_at`: datetime
    - `updated_at`: datetime

### Sample Request
```
GET /api/v1/subscribers/1 HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```

### Sample Response
```json
{
        "data": {
                "id": 1,
                "first_name": "Test",
                "last_name": "Subscriber",
                "email": "testsubscriber@example.com",
                "tags": [
                        {
                                "id": 1,
                                "name": "Test Tag",
                                "created_at": "2020-03-23 12:44:14",
                                "updated_at": "2020-03-23 12:44:14"
                        }
                ],
                "unsubscribed_at": null,
                "created_at": "2020-03-23 13:44:09",
                "updated_at": "2020-03-23 13:44:09"
        }
}
```

## Store
Create a new subscriber, optionally including tags that should be assigned to them; or update an existing subscriber based on their email address, optionally including the tags that should be assigned to them.

This endpoint is overloaded to allow for the update of existing subscribers based on the email address provided in the request. This allows for a workflow where the caller of the API needn't know whether the subscriber is already created; this eliminates the need for developers to create different logical paths in their application and also allows subscribers to be updated without prior knowledge of their internal SendPortal ID.

The rules for creating new subscribers or updating existing subscribers are as follows:
- If the email address is not currently used for a subscriber in the workspace, then a new subscriber will be created using the email address, name and tags provided.
- If the email address is currently used by a subscriber in the workspace, then that subscriber will be updated using the name and tags provided.

### Usage
**Endpoint**  
`POST /api/v1/subscribers`

**Expected Response Code**  
`201`

### Request Fields
- `first_name`: string (optional)
- `last_name`: string (optional)
- `email`: string
- `unsubscribed_at`: datetime (optional)
- `tags`: array<int> (optional)

### Response Fields
- `data`: object
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `tags`: array<object>
        - `id`: int
        - `name`: string
        - `created_at`: datetime
        - `updated_at`: datetime
    - `unsubscribed_at`: datetime
    - `created_at`: datetime
    - `updated_at`: datetime

### Sample Request
```
POST /api/v1/subscribers HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
        "first_name": "Test",
        "last_name": "Subscriber Two",
        "email": "testsubscriber2@example.com",
        "tags": [1]
}
```

### Sample Response
```json
{
        "data": {
                "id": 2,
                "first_name": "Test",
                "last_name": "Subscriber Two",
                "email": "testsubscriber2@example.com",
                "tags": [
                        {
                                "id": 1,
                                "name": "Test Tag",
                                "created_at": "2020-03-23 12:44:14",
                                "updated_at": "2020-03-23 12:44:14"
                        }
                ],
                "unsubscribed_at": null,
                "created_at": "2020-03-24 10:43:08",
                "updated_at": "2020-03-24 10:43:08"
        }
}
```

## Update
Update the details of the given subscriber.

### Usage
**Endpoint**  
`PUT /api/v1/subscribers/{subscriberId}`

**Expected Response Code**  
`200`

### Request Fields
- `first_name`: string (optional)
- `last_name`: string (optional)
- `email`: string
- `unsubscribed_at`: datetime (optional)

### Response Fields
- `data`: object
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `unsubscribed_at`: datetime
    - `created_at`: datetime
    - `updated_at`: datetime

### Sample Request
```
PUT /api/v1/subscribers/2 HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
        "first_name": "Test",
        "last_name": "Subscriber Two Updated",
        "email": "testsubscriber2@example.com",
        "tags": [1]
}
```

### Sample Response
```json
{
        "data": {
                "id": 2,
                "first_name": "Test",
                "last_name": "Subscriber Two Updated",
                "email": "testsubscriber2@example.com",
                "unsubscribed_at": null,
                "created_at": "2020-03-24 10:43:08",
                "updated_at": "2020-03-24 10:50:20"
        }
}
```

## Delete
Delete the given subscriber.

### Usage
**Endpoint**  
`DELETE /api/v1/subscribers/{subscriberId}`

**Expected Response Code**  
`204`

### Sample Request
```
DELETE /api/v1/subscribers/2 HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```
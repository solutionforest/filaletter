# Segment Subscribers

## Index

Retrieve a list of subscribers who have been assigned the given segment(tag).

### Usage

**Endpoint**

```
GET /api/v1/tags/{tagId}/subscribers
```

**Expected Response Code**

```
200
```

**Response Fields**

- `data`: array
- `id`: int
- `first_name`: string
- `last_name`: string
- `email`: string
- `created_at`: datetime
- `updated_at`: datetime

**Sample Request**

```
GET /api/v1/tags/1/subscribers HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```

**Sample Response**

```json
{
    "data": [
        {
            "id": 1,
            "first_name": "Test",
            "last_name": "Subscriber",
            "email": "testsubscriber@example.com",
            "created_at": "2020-03-23 13:44:09",
            "updated_at": "2020-03-23 13:44:09"
        }
    ]
}
```

## Store

Assign the given tag to a list of subscribers. Returns a list of subscribers that have been assigned the given tag.

This endpoint is idempotent, meaning that subscribers who have already been assigned the tag will not be continuously tagged on repeated requests to this endpoint. If the intention is to supply a full list of subscribers that should be tagged, the Update endpoint should be used instead.

**Endpoint**

```
POST /api/v1/tags/{tagId}/subscribers
```

**Expected Response Code**

```
200
```

**Request Fields**

- `subscribers`: array<int>

**Response Fields**

- `data`: array<object>
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `created_at`: datetime
    - `updated_at`: datetime

**Sample Request**

```
POST /api/v1/tags/1/subscribers HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "subscribers": [1, 2]
}
```

**Sample Response**

```json
{
    "data": [
        {
            "id": 1,
            "first_name": "Test",
            "last_name": "Subscriber",
            "email": "testsubscriber@example.com",
            "created_at": "2020-03-23 13:44:09",
            "updated_at": "2020-03-23 13:44:09"
        },
        {
            "id": 2,
            "first_name": "Test",
            "last_name": "Subscriber Two",
            "email": "testsubscriber2@example.com",
            "created_at": "2020-03-23 13:50:39",
            "updated_at": "2020-03-23 13:50:39"
        }
    ]
}
```

## Update

Replace all subscribers assigned a given tag with the list provided in the request.

If you want to assign a tag to additional subscribers without removing existing ones, you should use the Store endpoint. If you want to remove the tag from specific subscribers, you should use the Delete endpoint.

**Endpoint**

```
PUT /api/v1/tags/{tagId}/subscribers
```

**Expected Response Code**

```
200
```

**Request Fields**

- `subscribers`: array<int>

**Response Fields**

- `data`: array<object>
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `created_at`: datetime
    - `updated_at`: datetime

**Sample Request**

```
PUT /api/v1/tags/1/subscribers HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "subscribers": [1, 2]
}
```

**Sample Response**

```json
{
    "data": [
        {
            "id": 1,
            "first_name": "Test",
            "last_name": "Subscriber",
            "email": "testsubscriber@example.com",
            "created_at": "2020-03-23 13:44:09",
            "updated_at": "2020-03-23 13:44:09"
        },
        {
            "id": 2,
            "first_name": "Test",
            "last_name": "Subscriber Two",
            "email": "testsubscriber2@example.com",
            "created_at": "2020-03-23 13:50:39",
            "updated_at": "2020-03-23 13:50:39"
        }
    ]
}
```

## Delete

Removes the given tag from the subscribers provided in the request.

**Endpoint**

```
DELETE /api/v1/tags/{tagId}/subscribers
```

**Expected Response Code**

```
200
```

**Request Fields**

- `subscribers`: array<int>

**Response Fields**

- `data`: array<object>
    - `id`: int
    - `first_name`: string
    - `last_name`: string
    - `email`: string
    - `created_at`: datetime
    - `updated_at`: datetime

**Sample Request**

```
DELETE /api/v1/tags/1/subscribers HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "subscribers": [2]
}
```

**Sample Response**

```json
{
    "data": [
        {
            "id": 1,
            "first_name": "Test",
            "last_name": "Subscriber",
            "email": "testsubscriber@example.com",
            "created_at": "2020-03-23 13:44:09",
            "updated_at": "2020-03-23 13:44:09"
        }
    ]
}
```
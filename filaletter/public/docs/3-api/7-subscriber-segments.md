# Subscriber Tags

## Index

### Retrieve a list of tags that have been assigned to the given subscriber.

**Endpoint:**  
`GET /api/v1/subscribers/{subscriberId}/tags`

**Expected Response Code:**  
`200`

**Response Fields:**
- `data`: array
- `id`: int
- `name`: string
- `created_at`: datetime
- `updated_at`: datetime

**Sample Request:**
```
GET /api/v1/subscribers/1/tags HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
```

**Sample Response:**
```json
{
        "data": [
                {
                        "id": 1,
                        "name": "Test Tag",
                        "created_at": "2020-03-23 12:44:14",
                        "update_at": "2020-03-23 12:44:14"
                }
        ]
}
```

## Store

### Assigns a list of tags to the given subscriber. Returns a list of tags that have been assigned to the subscriber.

This endpoint is idempotent, meaning that tags already assigned to the subscriber will not be continuously added on repeated requests to this endpoint. However, if the intention is to supply a full list of tags that should be assigned to the given subscriber, the Update endpoint should be used instead.

**Endpoint:**  
`POST /api/v1/subscribers/{subscriberId}/tags`

**Expected Response Code:**  
`200`

**Request Fields:**
- `tags`: array<int>

**Response Fields:**
- `data`: array
- `id`: int
- `name`: string
- `created_at`: datetime
- `updated_at`: datetime

**Sample Request:**
```
POST /api/v1/subscribers/1/tags HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "tags": [1, 2]
}
```

**Sample Response:**
```json
{
        "data": [
                {
                        "id": 1,
                        "name": "Test Tag",
                        "created_at": "2020-03-23 12:44:14",
                        "update_at": "2020-03-23 12:44:14"
                },
                {
                        "id": 2,
                        "name": "Test Tag Two",
                        "created_at": "2020-03-24 08:45:55",
                        "update_at": "2020-03-24 08:57:21"
                }
        ]
}
```

## Update

### Replaces the list of tags assigned to the given subscriber with the list supplied in the request.

If you want to assign additional tags to the subscriber without removing existing ones, you should use the Store endpoint. If you want to remove specific tags from the subscriber, you should use the Delete endpoint.

**Endpoint:**  
`PUT /api/v1/subscribers/{subscriberId}/tags`

**Expected Response Code:**  
`200`

**Request Fields:**
- `tags`: array<int>

**Response Fields:**
- `data`: array
- `id`: int
- `name`: string
- `created_at`: datetime
- `updated_at`: datetime

**Sample Request:**
```
PUT /api/v1/subscribers/1/tags HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "tags": [1, 2]
}
```

**Sample Response:**
```json
{
        "data": [
                {
                        "id": 1,
                        "name": "Test Tag",
                        "created_at": "2020-03-23 12:44:14",
                        "update_at": "2020-03-23 12:44:14"
                },
                {
                        "id": 2,
                        "name": "Test Tag Two",
                        "created_at": "2020-03-24 08:45:55",
                        "update_at": "2020-03-24 08:57:21"
                }
        ]
}
```

## Delete

### Removes the given tags from the subscriber.

**Endpoint:**  
`DELETE /api/v1/subscribers/{subscriberId}/tags`

**Expected Response Code:**  
`200`

**Request Fields:**
- `tags`: array<int>

**Response Fields:**
- `data`: array
- `id`: int
- `name`: string
- `created_at`: datetime
- `updated_at`: datetime

**Sample Request:**
```
DELETE /api/v1/subscribers/1/tags HTTP/1.1
Host: filaletter.test
Authorization: Bearer 9w2fN7d4F3Banyv7gihYOWJEH6MvtYyZ
Accept: application/json
Content-Type: application/json

{
    "tags": [2]
}
```

**Sample Response:**
```json
{
    "data": [
        {
            "id": 1,
            "name": "Test Tag",
            "created_at": "2020-03-23 12:44:14",
            "update_at": "2020-03-23 12:44:14"
        }
    ]
}
```
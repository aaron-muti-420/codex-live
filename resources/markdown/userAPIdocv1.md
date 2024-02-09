- # Role API
## Endpoints
### 1. GET /roles

Returns a list of all roles.
#### Request

No request body required.
#### Response

```json
[
  {
    "id": 1,
    "role_title": "Chief",
    ...
  },
  ...
]
```


### 2. GET /roles/{id}

Returns a single role by ID.
#### Request

No request body required.
#### Response

```json
{
  "id": 1,
  "role_title": "Chief",
  ...
}
```


### 3. POST /roles

Creates a new role.
#### Request

```json
{
  "role_title": "Senior",
  ...
}
```


#### Response

```json
{
  "id": 2,
  "role_title": "Senior",
  ...
}
```


### 4. PUT /roles/{id}

Updates a role by ID.
#### Request

```json
{
  "role_title": "Updated Senior",
  ...
}
```


#### Response

```json
{
  "id": 2,
  "role_title": "Updated Senior",
  ...
}
```


### 5. DELETE /roles/{id}

Deletes a role by ID.
#### Request

No request body required.
#### Response

```json
{
  "message": "Role deleted successfully."
}
```

## Role Object

- `id`: The role's unique identifier.
- `role_title`: The title of the role.
- `created_at`: The timestamp when the role was created.
- `updated_at`: The timestamp when the role was last updated.

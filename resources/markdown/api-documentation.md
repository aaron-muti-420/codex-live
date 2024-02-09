# Codex API Documentation

## Base URL

All endpoints are relative to the base URL: `http://127.0.0.1:8000/api/`

## Authentication

API authentication is required for certain endpoints. Include the `Authorization` header with a valid token.

## Endpoints

### 1. User Authentication

#### 1.1 Login

- **Endpoint:** `/auth/login`
- **Method:** `POST`
- **Description:** Log in a user and receive an authentication token.

##### Request

```json
{
  "email": "user@example.com",
  "password": "password123"
}
```
##### Response

```json
{
  "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ..."
}
```

#### 1.2 Logout
- **Endpoint:** `/auth/logout`
- **Method:** `POST`
- **Description:** Log out the currently authenticated user.

##### Request

- No request body required.

##### Response
```json
Copy code
{
  "message": "Logged out successfully."
}
```
# Organization API Documentation

## Base URL

All organization-related endpoints are relative to the base URL: `{base_url}`.

## Authentication

API authentication is required for certain endpoints. Include the `Authorization` header with a valid token.

## Endpoints

### 1. Get Organization Details

#### 1.1 Endpoint

- **Endpoint:** `/organization`
- **Method:** `GET`
- **Description:** Retrieve details of the organization.

##### Request

No request body required.

##### Response

```json
{
  "organization_name": "My Organization",
  "address": "123 Main St, Cityville",
  "contact_email": "info@myorganization.com",
  ...
}
```


### 2. Update Organization Details
#### 2.1 Endpoint 
- **Endpoint:**  `/organization` 
- **Method:**  `PUT` 
- **Description:**  Update details of the organization.
##### Request

```json
{
  "organization_name": "New Organization Name",
  "address": "456 Updated St, Townsville",
  "contact_email": "contact@neworganization.com",
  ...
}
```


##### Response

```json
{
  "organization_name": "New Organization Name",
  "address": "456 Updated St, Townsville",
  "contact_email": "contact@neworganization.com",
  ...
}
```


### 3. Get Departments
#### 3.1 Endpoint 
- **Endpoint:**  `/organization/departments` 
- **Method:**  `GET` 
- **Description:**  Retrieve a list of all departments in the organization.
##### Request

No request body required.
##### Response

```json
[
  {
    "id": 1,
    "department_name": "HR",
    ...
  },
  ...
]
```


### 4. Get Sections
#### 4.1 Endpoint 
- **Endpoint:**  `/organization/sections` 
- **Method:**  `GET` 
- **Description:**  Retrieve a list of all sections in the organization.
##### Request

No request body required.
##### Response

```json
[
  {
    "id": 1,
    "section_name": "Engineering",
    ...
  },
  ...
]
```

### 2. Create Department
#### 2.1 Endpoint 
- **Endpoint:**  `/departments` 
- **Method:**  `POST` 
- **Description:**  Create a new department.
##### Request

```json
{
  "name": "Finance Department",
  ...
}
```


##### Response

```json
{
  "id": 2,
  "name": "Finance Department",
  ...
}
```


### 3. Get Department by ID
#### 3.1 Endpoint 
- **Endpoint:**  `/departments/{id}` 
- **Method:**  `GET` 
- **Description:**  Retrieve details of a specific department.
##### Request

No request body required.
##### Response

```json
{
  "id": 1,
  "name": "HR Department",
  ...
}
```


### 4. Update Department
#### 4.1 Endpoint 
- **Endpoint:**  `/departments/{id}` 
- **Method:**  `PUT` 
- **Description:**  Update details of a specific department.
##### Request

```json
{
  "name": "New HR Department Name",
  ...
}
```


##### Response

```json
{
  "id": 1,
  "name": "New HR Department Name",
  ...
}
```


### 5. Delete Department
#### 5.1 Endpoint 
- **Endpoint:**  `/departments/{id}` 
- **Method:**  `DELETE` 
- **Description:**  Delete a specific department.
##### Request

No request body required.
##### Response

```json
{
  "message": "Department deleted successfully."
}
```
# Section API Documentation

## Base URL

All section-related endpoints are relative to the base URL: `{base_url}`.

## Authentication

API authentication is required for certain endpoints. Include the `Authorization` header with a valid token.

## Endpoints

### 1. Get All Sections

#### 1.1 Endpoint

- **Endpoint:** `/sections`
- **Method:** `GET`
- **Description:** Retrieve a list of all sections.

##### Request

No request body required.

##### Response

```json
[
  {
    "id": 1,
    "section_name": "Development",
    ...
  },
  ...
]
```


### 2. Create Section
#### 2.1 Endpoint 
- **Endpoint:**  `/sections` 
- **Method:**  `POST` 
- **Description:**  Create a new section.
##### Request

```json
{
  "section_name": "Quality Assurance",
  "department_id": 1,
  ...
}
```


##### Response

```json
{
  "id": 2,
  "section_name": "Quality Assurance",
  ...
}
```


### 3. Get Section by ID
#### 3.1 Endpoint 
- **Endpoint:**  `/sections/{id}` 
- **Method:**  `GET` 
- **Description:**  Retrieve details of a specific section.
##### Request

No request body required.
##### Response

```json
{
  "id": 1,
  "section_name": "Development",
  ...
}
```


### 4. Update Section
#### 4.1 Endpoint 
- **Endpoint:**  `/sections/{id}` 
- **Method:**  `PUT` 
- **Description:**  Update details of a specific section.
##### Request

```json
{
  "section_name": "New Development Section Name",
  ...
}
```


##### Response

```json
{
  "id": 1,
  "section_name": "New Development Section Name",
  ...
}
```


### 5. Delete Section
#### 5.1 Endpoint 
- **Endpoint:**  `/sections/{id}` 
- **Method:**  `DELETE` 
- **Description:**  Delete a specific section.
##### Request

No request body required.
##### Response

```json
{
  "message": "Section deleted successfully."
}
```

# Role API Documentation

## Base URL

All role-related endpoints are relative to the base URL: `{base_url}`.

## Authentication

API authentication is required for certain endpoints. Include the `Authorization` header with a valid token.

## Endpoints

### 1. Get All Roles

#### 1.1 Endpoint

- **Endpoint:** `/roles`
- **Method:** `GET`
- **Description:** Retrieve a list of all roles.

##### Request

No request body required.

##### Response

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


### 2. Create Role
#### 2.1 Endpoint 
- **Endpoint:**  `/roles` 
- **Method:**  `POST` 
- **Description:**  Create a new role.
##### Request

```json
{
  "role_title": "Junior Developer",
  ...
}
```


##### Response

```json
{
  "id": 2,
  "role_title": "Junior Developer",
  ...
}
```


### 3. Get Role by ID
#### 3.1 Endpoint 
- **Endpoint:**  `/roles/{id}` 
- **Method:**  `GET` 
- **Description:**  Retrieve details of a specific role.
##### Request

No request body required.
##### Response

```json
{
  "id": 1,
  "role_title": "Chief",
  ...
}
```


### 4. Update Role
#### 4.1 Endpoint 
- **Endpoint:**  `/roles/{id}` 
- **Method:**  `PUT` 
- **Description:**  Update details of a specific role.
##### Request

```json
{
  "role_title": "Senior Developer",
  ...
}
```


##### Response

```json
{
  "id": 1,
  "role_title": "Senior Developer",
  ...
}
```


### 5. Delete Role
#### 5.1 Endpoint 
- **Endpoint:**  `/roles/{id}` 
- **Method:**  `DELETE` 
- **Description:**  Delete a specific role.
##### Request

No request body required.
##### Response

```json
{
  "message": "Role deleted successfully."
}
```

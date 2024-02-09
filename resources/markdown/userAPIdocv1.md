# User API

## Endpoints

- GET /users: Returns a list of all users.
- request
```json
GET /users HTTP/1.1
Host: example.com
```
- response
```json
HTTP/1.1 200 OK
Content-Type: application/json

[
    {
        "id": 1,
        "first_name": "John",
        "last_name": "Doe",
        "email": "john@example.com",
        // other user fields...
    },
    // more users...
]
```
- GET /users/{id}: Returns a single user by ID.
- POST /users: Creates a new user.
- PUT /users/{id}: Updates a user by ID.
- DELETE /users/{id}: Deletes a user by ID.


## User Object

The User object has the following properties:

- id: The user's unique identifier.
- first_name: The user's first name.
- last_name: The user's last name.
- date_of_birth: The user's date of birth.
- gender: The user's gender.
- national_id: The user's national ID.
- phone_number: The user's phone number.
- address: The user's address.
- city: The user's city.
- marital_status: The user's marital status.
- profile_photo_path: The path to the user's profile photo.
- email: The user's email.
- email_verified_at: The timestamp when the user's email was verified.
- password: The user's password.
- supervisor_id: The ID of the user's supervisor.
- salary_reference_number: The user's salary reference number.
- section_id: The ID of the user's section.
- years_of_service: The number of years the user has been in service.
- current_team_id: The ID of the user's current team.
- role_id: The ID of the user's role.
- position: The user's position.
- tax_identification_number: The user's tax identification number.
- social_security_number: The user's social security number.
- bank_account_number: The user's bank account number.
- bank_name: The name of the user's bank.
- bank_branch: The branch of the user's bank.
- salary_scale: The user's salary scale.
- basic_salary: The user's basic salary.
- housing_allowance: The user's housing allowance.
- transport_allowance: The user's transport allowance.
- other_allowance: The user's other allowance.
- total_salary: The user's total salary.
- education: The user's education.
- created_at: The timestamp when the user was created.
- updated_at: The timestamp when the user was last updated.
- date_of_employment: The user's date of employment.

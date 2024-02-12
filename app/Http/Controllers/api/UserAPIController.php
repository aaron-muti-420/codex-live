<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Add this line to import the User model
class UserAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(); // Retrieve all users from the database
        return response()->json($users, 200); // Return the users as JSON response with status code 200 (OK)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'national_id' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'marital_status' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'supervisor_id' => 'required',
            'salary_reference_number' => 'required',
            'section_id' => 'required',
            'role_id' => 'required',
            'position' => 'required',
            'tax_identification_number' => 'required',
            'social_security_number' => 'required',
            'bank_account_number' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required',
            'salary_scale' => 'required',
            'date_of_employment' => 'required',
        ]);

        $user = User::create($validatedData); // Create a new user with the validated data
        return response()->json($user, 201); // Return the created user as JSON response with status code 201 (Created)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id); // Find the user with the given ID or throw an exception if not found
        return response()->json($user, 200); // Return the user as JSON response with status code 200 (OK)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id); // Find the user with the given ID or throw an exception if not found
        $user->update($request->all()); // Update the user with the request data
        return response()->json($user, 200); // Return the updated user as JSON response with status code 200 (OK)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id); // Find the user with the given ID or throw an exception if not found
        $user->delete(); // Delete the user
        return response()->json(null, 204); // Return a null response with status code 204 (No Content)
    }
}

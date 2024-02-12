<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation\Role; // Add this line to import the Role model
class RoleAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all(); // Retrieve all roles from the database
        return response()->json($roles); // Return the roles as a JSON response
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */

public function store(Request $request)
{
    $role = Role::create($request->all()); // Create a new role with the request data
    return response()->json($role, 201); // Return the created role as a JSON response with status code 201 (Created)
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $role = Role::findOrFail($id); // Find the role with the specified ID
    return response()->json($role, 200); // Return the role as a JSON response with status code 200 (OK)
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $role = Role::findOrFail($id); // Find the role with the specified ID
    $role->update($request->all()); // Update the role with the request data
    return response()->json($role, 200); // Return the updated role as a JSON response with status code 200 (OK)
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $role = Role::findOrFail($id); // Find the role with the specified ID
    $role->delete(); // Delete the role
    return response()->json(null, 204); // Return a JSON response with status code 204 (No Content)
}
}

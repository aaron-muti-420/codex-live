<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation\Department; // Add this line
class DepartmentAPIController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all(); // Retrieve all departments from the database
        return response()->json($departments, 200); // Return the departments as JSON with status code 200
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department = new Department;
        // Set the department properties based on the request data
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->save(); // Save the department to the database
        return response()->json($department, 201); // Return the created department as JSON with status code 201
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Department::findOrFail($id); // Find the department by ID
        return response()->json($department, 200); // Return the department as JSON with status code 200
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::findOrFail($id); // Find the department by ID
        // Update the department properties based on the request data
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->save(); // Save the updated department to the database
        return response()->json($department, 200); // Return the updated department as JSON with status code 200
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail($id); // Find the department by ID
        $department->delete(); // Delete the department from the database
        return response()->json(null, 204); // Return a successful response with no content and status code 204
    }
}

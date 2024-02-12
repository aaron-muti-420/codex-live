<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation\Organisation; // Add this line

class OrganisationAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisations = Organisation::all(); // Retrieve all organisations
        return response()->json($organisations, 200); // Return JSON response with status code

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organisation = new Organisation;
        $organisation->name = $request->input('name');
        // Set other properties as needed
        $organisation->save(); // Save the organisation
        return response()->json($organisation, 201); // Return JSON response with status code 201
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organisation = Organisation::find($id); // Find organisation by ID
        if ($organisation) {
            return response()->json($organisation, 200); // Return JSON response with status code 200
        } else {
            return response()->json(['message' => 'Organisation not found'], 404); // Return JSON response with status code 404
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $organisation = Organisation::find($id); // Find organisation by ID
        if ($organisation) {
            $organisation->name = $request->input('name');
            // Update other properties as needed
            $organisation->save(); // Save the updated organisation
            return response()->json($organisation, 200); // Return JSON response with status code 200
        } else {
            return response()->json(['message' => 'Organisation not found'], 404); // Return JSON response with status code 404
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organisation = Organisation::find($id); // Find organisation by ID
        if ($organisation) {
            $organisation->delete(); // Delete the organisation
            return response()->json(['message' => 'Organisation deleted'], 200); // Return JSON response with status code 200
        } else {
            return response()->json(['message' => 'Organisation not found'], 404); // Return JSON response with status code 404
        }
    }
}

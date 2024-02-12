<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation\Section;

class SectionAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

  /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $section = new Section;
    // Set the section properties based on the request data
    $section->name = $request->input('name');
    $section->description = $request->input('description');
    // Save the section to the database
    $section->save();
    return response()->json($section); // Return the created section as JSON
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $section = Section::find($id); // Find the section by ID
    return response()->json($section); // Return the section as JSON
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $section = Section::find($id); // Find the section by ID
    // Update the section properties based on the request data
    $section->name = $request->input('name');
    $section->description = $request->input('description');
    // Save the updated section to the database
    $section->save();
    return response()->json($section); // Return the updated section as JSON
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $section = Section::find($id); // Find the section by ID
    $section->delete(); // Delete the section from the database
    return response()->json(['message' => 'Section deleted']); // Return a success message as JSON
}
}

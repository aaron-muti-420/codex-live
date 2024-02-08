<?php

namespace App\Http\Controllers;

use App\Models\Organisation\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        return view('departments.index');
    }

    public function show($id)
    {
        $department = Department::find($id);
        return view('departments.show',compact('department'));
    }
}

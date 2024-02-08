<?php

namespace App\Http\Controllers;

use App\Models\Organisation\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function index()
    {
        return view('sections.index');
    }
    public function show($id)
    {
        $section = Section::find($id);
        return view('sections.show',compact('section'));
    }
}

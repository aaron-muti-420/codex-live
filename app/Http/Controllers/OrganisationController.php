<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisation\Organisation;
class OrganisationController extends Controller
{
    //
    public function index()
    {
        return view('organisation.index');
    }
}

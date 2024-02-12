<?php

use App\Http\Controllers\api\DepartmentAPIController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserAPIController;
use App\Http\Controllers\api\OrganisationAPIController;
use App\Http\Controllers\api\RoleAPIController;
use App\Http\Controllers\api\SectionAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::resource('organisation', OrganisationAPIController::class);
Route::resource('employees', UserAPIController::class);
Route::resource('departments', DepartmentAPIController::class);
Route::resource('sections',SectionAPIController::class);
Route::resource('roles', RoleAPIController::class);

<?php

use App\Livewire\AddRoleModal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('employees', App\Livewire\EmployeeList::class);
    Route::resource('sections', \App\Http\Controllers\SectionController::class);
    Route::resource('departments',App\Livewire\DepartmentsList::class);
    Route::resource('roles', App\Livewire\RoleList::class);

    //livewire routes
});

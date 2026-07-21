<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | ROLES MODULE
    |--------------------------------------------------------------------------
    */
    Route::get('/roles', [RoleController::class, 'index']);
    Route::get('/roles/create', [RoleController::class, 'create']);
    Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');

    Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');
    Route::get('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.delete');

    /*
    |--------------------------------------------------------------------------
    | USERS MODULE
    |--------------------------------------------------------------------------
    */
    
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

    /*
    |--------------------------------------------------------------------------
    | PERMISSIONS MODULE
    |--------------------------------------------------------------------------
    */
    Route::get('/permissions', [PermissionController::class, 'index']);
    Route::get('/permissions/create', [PermissionController::class, 'create']);
    Route::post('/permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
    // SHOW USER
Route::get('/users/{id}', [UserController::class, 'show']);

// EDIT USER
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

// UPDATE USER
Route::post('/users/{id}/update', [UserController::class, 'update']);

// DELETE USER
Route::get('/users/{id}/delete', [UserController::class, 'destroy']);
});
require __DIR__.'/auth.php';
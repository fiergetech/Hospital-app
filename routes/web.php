<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default route

Route::get('/', [HomeController::class, 'index']);

// Add the route for the HomeController
Route::get('/home', [HomeController::class, 'redirect']);

// Grouped routes that require authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

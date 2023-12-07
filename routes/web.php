<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


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
    return view('index');
})->name('index');
Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/projects', function () {
    return view('projects');
})->name('projects');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/employees', function () {
    return view('employees');
})->name('employees');
Route::get('/reports', function () {
    return view('reports');
})->name('reports');

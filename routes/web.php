<?php

use App\Http\Controllers\LocalController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/states', StateController::class);
Route::resource('/locals', LocalController::class);
Route::resource('/regions', RegionController::class);
Route::resource('/project-managers', ProjectManagerController::class)->parameter('project_manager', 'projectManager');

require __DIR__.'/auth.php';

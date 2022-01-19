<?php

use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\WellController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\BasicInformation;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('/', function () {

        $user=User::count();

        $basic=BasicInformation::count();

        $infos=BasicInformation::get()->take(4);
    

        return view('dashboard',compact('user','basic','infos'));
    })->name('dashboard');
    Route::resource('/states', StateController::class);
    Route::get('states/locals/{state}', [StateController::class, 'getLocals']);
    Route::resource('/locals', LocalController::class);
    Route::get('locals/regions/{local}', [LocalController::class, 'getRegions']);
    Route::resource('/regions', RegionController::class);
    Route::resource('/project-managers', ProjectManagerController::class)->parameter('project_manager', 'projectManager');
    Route::resource('/basic-informations', BasicInformationController::class)->parameter('basic_information', 'basicInformation');
    Route::resource('/wells', WellController::class);
});


require __DIR__.'/auth.php';

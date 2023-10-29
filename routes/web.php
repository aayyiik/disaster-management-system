<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisasterReportController;
use App\Http\Controllers\DisasterTypeController;
use App\Http\Controllers\RoleController;
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

Route::get('/master', [DashboardController::class, 'master']);

// admin
Route::get('/user', [AdminController::class, 'index']);
Route::post('/user/create',[AdminController::class,'create']);
Route::get('/user/{id}/edit',[AdminController::class,'edit']);
Route::post('/user/{id}/update',[AdminController::class,'update']);
Route::get('/user/{id}/delete',[AdminController::class,'delete']);

//disaster type
Route::get('/disaster-type', [DisasterTypeController::class, 'index']);
Route::post('/disaster-type/create',[DisasterTypeController::class,'create']);
Route::get('/disaster-type/{id}/edit',[DisasterTypeController::class,'edit']);
Route::post('/disaster-type/{id}/update',[DisasterTypeController::class,'update']);
Route::get('/disaster-type/{id}/delete',[DisasterTypeController::class,'delete']);

//role
Route::get('/role', [RoleController::class, 'index']);
Route::post('/role/create',[RoleController::class,'create']);
Route::get('/role/{id}/edit',[RoleController::class,'edit']);
Route::post('/role/{id}/update',[RoleController::class,'update']);
Route::get('/role/{id}/delete',[RoleController::class,'delete']);

//disaster report
Route::get('/disaster-report', [DisasterReportController::class, 'index']);
Route::post('/disaster-report/create',[DisasterReportController::class,'create']);
Route::get('/disaster-report/{id}/edit',[DisasterReportController::class,'edit']);
Route::post('/disaster-report/{id}/update',[DisasterReportController::class,'update']);
Route::get('/disaster-report/{id}/delete',[DisasterReportController::class,'delete']);

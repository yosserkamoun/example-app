<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\EncadreurController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\HomeController;



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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::resource('admins', AdminController::class);
Route::resource('stagiaires', StagiaireController::class);
Route::resource('encadreurs', EncadreurController::class);
Route::resource('stages', StageController::class);
Route::middleware(['auth.admin'])->group(function () {
Route::resource('admins', AdminController::class);
});
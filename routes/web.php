<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;

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

// Route::resource('showw', ['App\Http\Controllers\ModuleController' ::class,'show']);

// Route::resource('index', ['App\Http\Controllers\ModuleController' ::class,'index']);


Route::patch('/module', [ModuleController::class]);

// Route::get('/show', [ModuleController::class, 'show']);

Route::put('/module/{id}/edit', [ModuleController::class, 'edit']); 

// Route::resource('/module/{id}/edit', [ModuleController::class, 'edit']); 
// Route::post('/edit','ModuleController@edit');
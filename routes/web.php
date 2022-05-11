<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personController;
use App\Http\Controllers\personTableController;
use App\Http\Controllers\editPersonController;

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

Route::get('/people', [personController::class,'index'])->middleware('auth');
Route::get('/people/create', [personTableController::class,'index'])->middleware('auth');
Route::get('/people/destroy/{id}', [personController::class,'destroy'])->middleware('auth');
Route::get('/people/edit/{id}', [editPersonController::class,'index'])->middleware('auth');

Route::post('/people/create', [personTableController::class,'inputDt'])->middleware('auth');
Route::post('/people/edit/{id}', [editPersonController::class,'applyEd'])->middleware('auth');

require __DIR__.'/auth.php';

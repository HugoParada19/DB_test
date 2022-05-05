<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\cpersonController;

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

Route::get('main', [mainController::class,'index']);
Route::get('ctable', [cpersonController::class,'index']);
Route::get('/destroy/{id}', [mainController::class,'destroy']);
Route::get('/edit/{id}', [mainController::class,'edit']);
Route::get('/edit/{id}/apply', [mainController::class,'applyEdits']);

Route::post('ctable', [cpersonController::class,'inputDt']);

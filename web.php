<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



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

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'register']);
Route::get('/view',[LoginController::class, 'view']);

//for edit 
Route::get('/edit/{id}',[LoginController::class, 'edit']);

//for update
Route::put('/update/{id}',[LoginController::class, 'update']);

//delete
Route::get('/delete/{id}',[LoginController::class, 'delete']);







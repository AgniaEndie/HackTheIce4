<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [\App\Http\Controllers\UserController::class,'index']);
//->middleware('auth:sanctum');
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class,'show'])->middleware('auth:sanctum');
Route::put('/user/edit/{id}', [\App\Http\Controllers\UserController::class,'update'])->middleware('auth:sanctum');

Route::post('/user-registry', [\App\Http\Controllers\UserController::class,'create'])->name('registry');
Route::post('/user-auth', [\App\Http\Controllers\UserController::class,'auth'])->name('login');



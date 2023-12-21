<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// user routes
Route::get('user', [UserController::class,'index']);
Route::post('user-store', [UserController::class,'store']);
Route::get('user-profile/{id}', [UserController::class,'show']);
Route::patch('user-edit/{id}', [UserController::class,'edit']);
Route::put('user-update/{id}', [UserController::class,'update']);
Route::delete('user-delete/{id}', [UserController::class,'delete']);


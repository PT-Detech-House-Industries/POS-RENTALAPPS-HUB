<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TalentController;
use App\Http\Controllers\API\ProfileAccountController;

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
//profile
Route::get('/profile-account', [ProfileAccountController::class, 'index']);
Route::put('/profile-account/{id}/update', [ProfileAccountController::class, 'update']);
// talent
Route::get('/talent', [TalentController::class, 'index']);
Route::post('/talent/store', [TalentController::class, 'store']);
Route::get('/talent/{id}/show', [TalentController::class, 'show']);
Route::put('/talent/{id}/update', [TalentController::class, 'update']);
Route::delete('/talent/{id}/delete', [TalentController::class, 'destroy']);
// auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'store']);
// Route::get('/login/show', [AuthController::class, 'show']);
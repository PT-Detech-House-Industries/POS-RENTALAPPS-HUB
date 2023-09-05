<?php

use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderTempController;
use App\Http\Controllers\OrderServiceController;
use App\Http\Controllers\ServiceTalentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('dashboard');
});

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/auth/facebook', [AuthController::class, 'redirectToFacebook']);
Route::get('/auth/facebook/callback', [AuthController::class, 'handleFacebookCallback']);

// order-detail
Route::get('/order-detail', [OrderDetailController::class, 'index'])->name('order.detail.index');
Route::get('/order-detail/create', [OrderDetailController::class, 'create'])->name('order.detail.create');
Route::post('/order-detail/create', [OrderDetailController::class, 'store'])->name('order.detail.store');
Route::get('/order-detail/{id}/detail', [OrderDetailController::class, 'show'])->name('order.detail.detail');
Route::get('/order-detail/{id}/edit', [OrderDetailController::class, 'edit'])->name('order.detail.edit');
Route::put('/order-detail/{id}/edit', [OrderDetailController::class, 'update'])->name('order.detail.update');
Route::get('/order-detail/{id}/destroy', [OrderDetailController::class, 'destroy'])->name('order.detail.destroy');
// order-temp
Route::get('/order-temp', [OrderTempController::class, 'index'])->name('order.temp.index');
Route::get('/order-temp/create', [OrderTempController::class, 'create'])->name('order.temp.create');
Route::post('/order-temp/create', [OrderTempController::class, 'store'])->name('order.temp.store');
Route::get('/order-temp/{id}/detail', [OrderTempController::class, 'show'])->name('order.temp.detail');
Route::get('/order-temp/{id}/edit', [OrderTempController::class, 'edit'])->name('order.temp.edit');
Route::put('/order-temp/{id}/edit', [OrderTempController::class, 'update'])->name('order.temp.update');
Route::get('/order-temp/{id}/destroy', [OrderTempController::class, 'destroy'])->name('order.temp.destroy');
// order-service
Route::get('/order-service', [OrderServiceController::class, 'index'])->name('order.service.index');
Route::get('/order-service/create', [OrderServiceController::class, 'create'])->name('order.service.create');
Route::post('/order-service/create', [OrderServiceController::class, 'store'])->name('order.service.store');
Route::get('/order-service/{id}/detail', [OrderServiceController::class, 'show'])->name('order.service.detail');
Route::get('/order-service/{id}/edit', [OrderServiceController::class, 'edit'])->name('order.service.edit');
Route::put('/order-service/{id}/edit', [OrderServiceController::class, 'update'])->name('order.service.update');
Route::get('/order-service/{id}/destroy', [OrderServiceController::class, 'destroy'])->name('order.service.destroy');
// service-talent
Route::get('/service-talent', [ServiceTalentController::class, 'index'])->name('service.talent.index');
Route::get('/service-talent/create', [ServiceTalentController::class, 'create'])->name('service.talent.create');
Route::post('/service-talent/create', [ServiceTalentController::class, 'store'])->name('service.talent.store');
Route::get('/service-talent/{id}/detail', [ServiceTalentController::class, 'show'])->name('service.talent.detail');
Route::get('/service-talent/{id}/edit', [ServiceTalentController::class, 'edit'])->name('service.talent.edit');
Route::put('/service-talent/{id}/edit', [ServiceTalentController::class, 'update'])->name('service.talent.update');
Route::get('/service-talent/{id}/destroy', [ServiceTalentController::class, 'destroy'])->name('service.talent.destroy');
// client
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/create', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/{id}/detail', [ClientController::class, 'show'])->name('client.detail');
Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/client/{id}/edit', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/{id}/destroy', [ClientController::class, 'destroy'])->name('client.destroy');
// user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/detail', [UserController::class, 'show'])->name('user.detail');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}/edit', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
// talent
Route::get('/talent', [TalentController::class, 'index'])->name('talent.index');
Route::get('/talent/create', [TalentController::class, 'create'])->name('talent.create');
Route::post('/talent/create', [TalentController::class, 'store'])->name('talent.store');
Route::get('/talent/{id}/detail', [TalentController::class, 'show'])->name('talent.detail');
Route::get('/talent/{id}/edit', [TalentController::class, 'edit'])->name('talent.edit');
Route::put('/talent/{id}/edit', [TalentController::class, 'update'])->name('talent.update');
Route::get('/talent/{id}/destroy', [TalentController::class, 'destroy'])->name('talent.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
    // return view('client.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->group(function () {
    // awal
    Route::get('registrasi-talent', function () {
        return view('admin.registrasi-talent.index');
    });
});
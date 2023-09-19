<?php

use App\Http\Controllers\WaktuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileAccountController;
use App\Http\Controllers\RoleController;
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
    return redirect('/login');
});

Route::get('/waktu', [WaktuController::class, 'tombol']);
Route::post('/waktu', [WaktuController::class, 'berhasil']);

Route::get('/create-role', [RoleController::class, 'createRole']);

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/auth/facebook', [AuthController::class, 'redirectToFacebook']);
Route::get('/auth/facebook/callback', [AuthController::class, 'handleFacebookCallback']);

// Route::middleware(['role:admin'])->group(function () {
//     // Definisikan rute-rute yang memerlukan peran 'admin' di sini.
// Route::get('/talent/role/{role}', [TalentController::class, 'index'])->name('talent.index');
// });

// starter page
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// route untuk owner
Route::prefix('owner')->group(function () {
    // talent
    Route::get('/talent', [TalentController::class, 'index'])->name('owner.talent.index');
    Route::get('/talent/create', [TalentController::class, 'create'])->name('owner.talent.create');
    Route::post('/talent/create', [TalentController::class, 'store'])->name('owner.talent.store');
    Route::get('/talent/{id}/detail', [TalentController::class, 'show'])->name('owner.talent.detail');
    Route::get('/talent/{id}/edit', [TalentController::class, 'edit'])->name('owner.talent.edit');
    Route::put('/talent/{id}/edit', [TalentController::class, 'update'])->name('owner.talent.update');
    Route::delete('/talent/{id}/destroy', [TalentController::class, 'destroy'])->name('owner.talent.destroy');
    // order-detail
    Route::get('/order-detail', [OrderDetailController::class, 'index'])->name('owner.order.detail.index');
    Route::get('/order-detail/create', [OrderDetailController::class, 'create'])->name('owner.order.detail.create');
    Route::post('/order-detail/create', [OrderDetailController::class, 'store'])->name('owner.order.detail.store');
    Route::get('/order-detail/{id}/detail', [OrderDetailController::class, 'show'])->name('owner.order.detail.detail');
    Route::get('/order-detail/{id}/edit', [OrderDetailController::class, 'edit'])->name('owner.order.detail.edit');
    Route::put('/order-detail/{id}/edit', [OrderDetailController::class, 'update'])->name('owner.order.detail.update');
    Route::get('/order-detail/{id}/destroy', [OrderDetailController::class, 'destroy'])->name('owner.order.detail.destroy');
    // order-temp
    Route::get('/order-temp', [OrderTempController::class, 'index'])->name('owner.order.temp.index');
    Route::get('/order-temp/create', [OrderTempController::class, 'create'])->name('owner.order.temp.create');
    Route::post('/order-temp/create', [OrderTempController::class, 'store'])->name('owner.order.temp.store');
    Route::get('/order-temp/process', [OrderTempController::class, 'process'])->name('owner.order.temp.process');
    // Route::get('/order-temp/{id}/detail', [OrderTempController::class, 'show'])->name('order.temp.detail');
    // Route::get('/order-temp/{id}/edit', [OrderTempController::class, 'edit'])->name('order.temp.edit');
    // Route::put('/order-temp/{id}/edit', [OrderTempController::class, 'update'])->name('order.temp.update');
    // Route::get('/order-temp/{id}/destroy', [OrderTempController::class, 'destroy'])->name('order.temp.destroy');
    // order-service
    Route::get('/order-service', [OrderServiceController::class, 'index'])->name('owner.order.service.index');
    Route::get('/order-service/create', [OrderServiceController::class, 'create'])->name('owner.order.service.create');
    Route::post('/order-service/create', [OrderServiceController::class, 'store'])->name('owner.order.service.store');
    Route::get('/order-service/{id}/detail', [OrderServiceController::class, 'show'])->name('owner.order.service.detail');
    Route::get('/order-service/{id}/edit', [OrderServiceController::class, 'edit'])->name('owner.order.service.edit');
    Route::put('/order-service/{id}/edit', [OrderServiceController::class, 'update'])->name('owner.order.service.update');
    Route::get('/order-service/{id}/destroy', [OrderServiceController::class, 'destroy'])->name('owner.order.service.destroy');
    // service-talent
    Route::get('/service-talent', [ServiceTalentController::class, 'index'])->name('owner.service.talent.index');
    Route::get('/service-talent/create', [ServiceTalentController::class, 'create'])->name('owner.service.talent.create');
    Route::post('/service-talent/create', [ServiceTalentController::class, 'store'])->name('owner.service.talent.store');
    Route::get('/service-talent/{id}/detail', [ServiceTalentController::class, 'show'])->name('owner.service.talent.detail');
    Route::get('/service-talent/{id}/edit', [ServiceTalentController::class, 'edit'])->name('owner.service.talent.edit');
    Route::put('/service-talent/{id}/edit', [ServiceTalentController::class, 'update'])->name('owner.service.talent.update');
    Route::get('/service-talent/{id}/destroy', [ServiceTalentController::class, 'destroy'])->name('owner.service.talent.destroy');
    // client
    Route::get('/client', [ClientController::class, 'index'])->name('owner.client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('owner.client.create');
    Route::post('/client/create', [ClientController::class, 'store'])->name('owner.client.store');
    Route::get('/client/{id}/detail', [ClientController::class, 'show'])->name('owner.client.detail');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('owner.client.edit');
    Route::put('/client/{id}/edit', [ClientController::class, 'update'])->name('owner.client.update');
    Route::get('/client/{id}/destroy', [ClientController::class, 'destroy'])->name('owner.client.destroy');
    // user
    Route::get('/user', [UserController::class, 'index'])->name('owner.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('owner.user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('owner.user.store');
    Route::get('/user/{id}/detail', [UserController::class, 'show'])->name('owner.user.detail');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('owner.user.edit');
    Route::put('/user/{id}/edit', [UserController::class, 'update'])->name('owner.user.update');
    Route::get('/user/{id}/destroy', [UserController::class, 'destroy'])->name('owner.user.destroy');

})->middleware(['auth', 'verified','role:owner']);

// role untuk admin
Route::prefix('admin')->group(function () {
    // talent
    Route::get('/talent', [TalentController::class, 'index'])->name('admin.talent.index');
    Route::get('/talent/create', [TalentController::class, 'create'])->name('admin.talent.create');
    Route::post('/talent/create', [TalentController::class, 'store'])->name('admin.talent.store');
    Route::get('/talent/{id}/detail', [TalentController::class, 'show'])->name('admin.talent.detail');
    Route::get('/talent/{id}/edit', [TalentController::class, 'edit'])->name('admin.talent.edit');
    Route::put('/talent/{id}/edit', [TalentController::class, 'update'])->name('admin.talent.update');
    Route::get('/talent/{id}/destroy', [TalentController::class, 'destroy'])->name('admin.talent.destroy');

})->middleware(['auth', 'verified','role:admin']);

// role untuk talent
Route::prefix('talent')->group(function () {
    //profile
    Route::get('/profile', [ProfileAccountController::class, 'index'])->name('talent.profile.index');
    Route::get('/profile/{id}/edit', [ProfileAccountController::class, 'edit'])->name('talent.profile.edit');
    Route::put('/profile/{id}/edit', [ProfileAccountController::class, 'update'])->name('talent.profile.update');
    // order-service
    Route::get('/order-service', [OrderServiceController::class, 'index'])->name('talent.order.service.index');
    Route::get('/order-service/create', [OrderServiceController::class, 'create'])->name('talent.order.service.create');
    Route::post('/order-service/create', [OrderServiceController::class, 'store'])->name('talent.order.service.store');
    Route::get('/order-service/{id}/detail', [OrderServiceController::class, 'show'])->name('talent.order.service.detail');
    Route::get('/order-service/{id}/edit', [OrderServiceController::class, 'edit'])->name('talent.order.service.edit');
    Route::put('/order-service/{id}/edit', [OrderServiceController::class, 'update'])->name('talent.order.service.update');
    Route::get('/order-service/{id}/destroy', [OrderServiceController::class, 'destroy'])->name('talent.order.service.destroy');

})->middleware(['auth', 'verified','role:talent']);

// // role untuk client
Route::prefix('client')->group(function () {
    //profile
    Route::get('/profile', [ProfileAccountController::class, 'index'])->name('client.profile.index');
    Route::get('/profile/{id}/edit', [ProfileAccountController::class, 'edit'])->name('client.profile.edit');
    Route::put('/profile/{id}/edit', [ProfileAccountController::class, 'update'])->name('client.profile.update');
    // talent
    Route::get('/talent', [TalentController::class, 'index'])->name('talent.index');
    Route::get('/talent/create', [TalentController::class, 'create'])->name('talent.create');
    Route::post('/talent/create', [TalentController::class, 'store'])->name('talent.store');
    Route::get('/talent/{id}/detail', [TalentController::class, 'show'])->name('talent.detail');
    Route::get('/talent/{id}/edit', [TalentController::class, 'edit'])->name('talent.edit');
    Route::put('/talent/{id}/edit', [TalentController::class, 'update'])->name('talent.update');
    Route::get('/talent/{id}/destroy', [TalentController::class, 'destroy'])->name('talent.destroy');

})->middleware(['auth', 'verified','role:client']);


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Route::prefix('admin')->group(function () {
//     // awal
//     Route::get('registrasi-talent', function () {
//         return view('admin.registrasi-talent.index');
//     });
// });
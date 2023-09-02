<?php

use App\Http\Controllers\KategoriTalentController;
use App\Http\Controllers\ProfileController;
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
    Alert::success('Success', 'You have been successfully logged in.')->autoclose(3000);
    return view('welcome');
    // return view('talent.dashboard');
});

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

Route::get('/old', [KategoriTalentController::class, 'index'])->name('admin.kategori-talent.index');
Route::get('/create', [KategoriTalentController::class, 'create']);
Route::post('/create', [KategoriTalentController::class, 'store']);
Route::get('/show/{id}', [KategoriTalentController::class, 'show'])->name('admin.kategori-talent.show');
Route::get('/edit/{id}', [KategoriTalentController::class, 'edit'])->name('admin.kategori-talent.edit');
Route::put('/edit/{id}', [KategoriTalentController::class, 'update'])->name('admin.kategori-talent.update');
Route::delete('/delete/{id}', [KategoriTalentController::class, 'destroy'])->name('admin.kategori-talent.destroy');

Route::get('/1', function () {
    return view('template.component-card');
});

// temp route

Route::get('/pembayaran/chart', function () {
    // pembayaran
    return view('client.pembayaran.chart');
});

Route::get('/pembayaran/order-konfirm', function () {
    // pembayaran
    return view('client.pembayaran.order-konfirm');
});

Route::get('/pembayaran/metode', function () {
    // pembayaran
    return view('client.pembayaran.metode');
});

Route::get('/pembayaran/berhasil', function () {
    // pembayaran
    return view('client.pembayaran.success');
});

Route::get('/pemesanan/talent-katalog', function () {
    // pemesanan
    return view('client.pemesanan.talent-katalog');
});

Route::get('/pemesanan/talent-domisili', function () {
    // pemesanan
    return view('client.pemesanan.talent-domisili');
});

Route::get('/pemesanan/talent-listorder', function () {
    // pemesanan
    return view('client.pemesanan.talent-listorder');
});

Route::get('/pemesanan/talent-riwayat', function () {
    // pemesanan
    return view('client.pemesanan.talent-riwayat');
});

Route::get('/pemesanan/talent-page', function () {
    // pemesanan
    return view('client.pemesanan.talent-page');
});

Route::get('/pemesanan/talent-rating', function () {
    // pemesanan
    return view('client.pemesanan.talent-rating');
});

// Route::get('/pemesanan/talent-detail', function () {
//     // pemesanan
//     return view('client.pemesanan.talent-detail');
// });

Route::get('/chat', function () {
    return view('client.chat.index');
});

Route::get('/riwayat', function () {
    //riwayat
    return view('client.riwayat.index');
});

Route::get('/riwayat/detail', function () {
    //riwayat
    return view('client.riwayat.detail');
});

Route::get('/pengaturan', function () {
    // pengaturan
    return view('client.pengaturan.index');
});

Route::get('/pengaturan/profile', function () {
    //pengaturan
    return view('client.pengaturan.profile');
});

Route::get('/pengaturan/profile/edit', function () {
    //pengaturan
    return view('client.pengaturan.profile-edit');
});

// Route::get('/talent-katalog', function () {
//     // pemesanan
//     return view('client.pemesanan.talent-katalog');
// });

Route::get('/talent-detail', function () {
    // pemesanan
    return view('client.pemesanan.talent-detail');
});

Route::get('/offline', function () {
    return view('client.offline');
});

// talent

Route::get('/talent', function () {
    return view('talent.dashboard');
});

Route::get('/talent/pembayaran', function () {
    // pemanyaran
    return view('talent.pembayaran.index');
});

Route::get('/talent/pembayaran/detail', function () {
    // pembayaran
    return view('talent.pembayaran.show');
});

Route::get('/talent/pelayanan', function () {
    // pelayanan
    return view('talent.pelayanan.index');
});

Route::get('/talent/client-dating', function () {
    // pelayanan
    return view('talent.pelayanan.client-dating');
});

Route::get('/talent/akun', function () {
    // pelayanan
    return view('talent.akun.profile');
});

Route::get('talent/under-maintance', function () {
    // pelayanan
    return view('talent.under-maintance');
});
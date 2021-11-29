<?php

use App\Exports\OprecStaffExport;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OprecStaffController;
use App\Http\Controllers\LinkShortenerController;
use App\Http\Controllers\Peserta\PesertaController;
use App\Http\Controllers\FordaController;
use App\Http\Controllers\Peserta\dashboard\Home;
use App\Models\OprecStaff;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Chart\Layout;

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
//Route web informasi
Route::get('/', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('main', function() {return view('main');});
Route::get('fasilitas', function() {return view('fasilitas');});
Route::get('fakultas', function() {return view('fakultas');});
Route::get('departemen', function(){return view('departemen');});
Route::get('merchandise', function(){return view('merchandise');});
Route::get('team', function(){return view('team');});
Route::get('beasiswa', function(){return view('beasiswa');});
Route::get('eventual', function(){return view('eventual');});
Route::get('alumni', function(){return view('alumni');});
Route::get('/open-campus/register-fnd',function(){return view('open-campus.register-fnd',["title" => "register-fnd"]);});
Route::get('/open-campus/event-regist',function(){return view('open-campus.event-regist',["title" => "event-regist"]);});
Route::get('/open-campus/dashboard-fnd',function(){return view('open-campus.dashboard-fnd',["title" => "dashboard-fnd"]);});
Route::get('/open-campus/thank-you',function(){return view('open-campus.thank-you',["title" => "Thank You!"]);});

// Route untuk admin
Route::middleware('can:isAdmin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('shortener/', [LinkShortenerController::class, 'create'])->name('link.create');
    Route::post('shortener/', [LinkShortenerController::class, 'store'])->name('link.store');
    Route::get('shortener/update/{id}', [LinkShortenerController::class, 'update'])->name('link.update');
    Route::post('shortener/update/{id}', [LinkShortenerController::class, 'storeUpdate'])->name('link.update.store');
    Route::post('shortener/delete/{id}', [LinkShortenerController::class, 'delete'])->name('link.delete');
});

//Route untuk Peserta
Route::prefix('peserta')->middleware('can:isPeserta')->group(function () {
    Route::prefix('welcome')->group(function () {
        Route::get('/', [PesertaController::class, 'index'])->name('peserta');
        Route::get('/upload', [PesertaController::class, 'UploadPage'])->name('peserta.upload');
        Route::get('/absensi', [PesertaController::class, 'absen'])->name('peserta.absen');
        Route::post('/absens/proses', [PesertaController::class, 'prosesAbsensi'])->name('peserta.proses.absen');
        Route::get('/daftar', [PesertaController::class, 'registerWelcome'])->name('peserta.welcome.register');
        Route::post('/daftar', [PesertaController::class, 'storeWelcome'])->name('peserta.welcome.store');
        Route::post('/upload/bukti', [PesertaController::class, 'UploadBukti'])->name('peserta.postupload.bukti');
    });
});

// Route untuk forda
Route::prefix('forda')->middleware('can:isForda')->group(function () {
    Route::get('/', [FordaController::class, 'index'])->name('forda');
    Route::get('/absensi', [FordaController::class, 'absensi'])->name('forda.absensi');
    Route::get('/edit-biaya', [FordaController::class, 'editBiaya'])->name('forda.edit-biaya');
    Route::post('/edit-biaya', [FordaController::class, 'storeBiaya'])->name('forda.edit-biaya.store');
    Route::get('/edit-pj', [FordaController::class, 'editPJ'])->name('forda.edit-pj');
    Route::post('/edit-pj', [FordaController::class, 'storePJ'])->name('forda.edit-pj.store');
    Route::get('/link-meet', [FordaController::class, 'LinkMeetPage'])->name('forda.link-meet-page');
    Route::post('/link-meet', [FordaController::class, 'UpdateLinkMeet'])->name('forda.link-meet-post');
    Route::get('/verif-bayar', [FordaController::class, 'indexVerifBayar'])->name('forda.verif-bayar');
    Route::post('/verif-bayar/terima', [FordaController::class, 'verifBayar'])->name('forda.terima-bayar');
    Route::post('/verif-bayar/tolak', [FordaController::class, 'tolakBayar'])->name('forda.tolak-bayar');
    Route::get('/detailBayar/{id}', [FordaController::class, 'detailBayar'])->name('forda.detail-bayar');
});

Route::get('/{slug}', [LinkShortenerController::class, 'redirectHandler'])->name('link.redirect');

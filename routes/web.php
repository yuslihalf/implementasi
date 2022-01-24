<?php

use Illuminate\Support\Facades\Route;

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
    return view('blank_page_test');
});

Route::get('/test', function () {
    return view('blank_page_test');
});

Route::get('/login_google', function () {
    return view('login_google');
});

Route::get('/login', function () {
    return view('login');
});

use App\Http\Controllers\C_blank_page;
Route::get('/blank_page',[C_blank_page::class, 'index']);

use App\Http\Controllers\C_customer_add;
Route::get('/customer', [C_customer_add::class,'index']);
Route::get('/customer_add', [C_customer_add::class,'customer_add']);
Route::get('/getKota',[C_customer_add::class,'getKota']);
Route::get('/getKec',[C_customer_add::class,'getKecamatan']);
Route::get('/getKel',[C_customer_add::class,'getKelurahan']);
Route::post('/customer_add/store',[C_customer_add::class,'store']);
Route::get('/customer_excel', [C_customer_add::class,'excels']);
Route::post('/customer_excel/import', [C_customer_add::class,'import_excel']);
Route::get('/customer_excel/export', [C_customer_add::class,'export_excel']);

use App\Http\Controllers\C_barang;
Route::get('/barang', [C_barang::class,'index']);
Route::post('/barang/store', [C_barang::class,'store']);
Route::post('/barang/cetakPdf', [C_barang::class,'cetakPdf']);
Route::get('/scan_barcode', [C_barang::class,'scan_barcode']);
Route::get('/barang/cetakPdfChk/{id_barang}/{baris_barang}/{kolom_barang}', [C_barang::class,'cetakPdfChk']);

use App\Http\Controllers\C_toko;
Route::get('/toko', [C_toko::class,'index']);
Route::post('/toko/store', [C_toko::class,'store']);
Route::get('/scan_toko', [C_toko::class,'scan_toko']);
Route::post('/scan_toko/getLocationToko',[C_toko::class,'getLocationToko']);
Route::post('/scan_toko/hasil',[C_toko::class,'getDistanceFromLatLonInKm']);
Route::get('/toko/export/{id}', [C_toko::class, 'export'] );

use App\Http\Controllers\GoogleController;
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

use App\Http\Controllers\C_ScoreBoard;
Route::get('/scoreboard-view',[C_ScoreBoard::class,'index']);
Route::get('/scoreboard-sse',[C_ScoreBoard::class,'sse']);
Route::get('/scoreboard-console',[C_ScoreBoard::class,'console']);
Route::post('/scoreboard-console/update-period',[C_ScoreBoard::class,'updatePeriod']);
Route::post('/scoreboard-console/reset-period',[C_ScoreBoard::class,'resetPeriod']);
Route::post('/scoreboard-console/update-home-name',[C_ScoreBoard::class,'updateHomeName']);
Route::post('/scoreboard-console/update-home-score',[C_ScoreBoard::class,'updateHomeScore']);
Route::post('/scoreboard-console/reset-home-score',[C_ScoreBoard::class,'resetHomeScore']);
Route::post('/scoreboard-console/update-home-foul',[C_ScoreBoard::class,'updateHomeFoul']);
Route::post('/scoreboard-console/reset-home-foul',[C_ScoreBoard::class,'resetHomeFoul']);
Route::post('/scoreboard-console/update-away-name',[C_ScoreBoard::class,'updateAwayName']);
Route::post('/scoreboard-console/update-away-score',[C_ScoreBoard::class,'updateAwayScore']);
Route::post('/scoreboard-console/reset-away-score',[C_ScoreBoard::class,'resetAwayScore']);
Route::post('/scoreboard-console/update-away-foul',[C_ScoreBoard::class,'updateAwayFoul']);
Route::post('/scoreboard-console/reset-away-foul',[C_ScoreBoard::class,'resetAwayFoul']);
Route::post('/scoreboard-console/update-home-status',[C_ScoreBoard::class,'updateHomeStatus']);
Route::post('/scoreboard-console/update-timer',[C_ScoreBoard::class,'updateTimer']);
Route::post('/update-menit-detik',[C_ScoreBoard::class,'update_menit_detik']);
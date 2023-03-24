<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
Route::get('/indexadmin', [SiswaController::class, 'indexadmin'])->name('indexadmin');
Route::get('/logout', [SiswaController::class, 'logout'])->name('logout');


Route::get('/siswa', [SiswaController::class,'siswa'])->name('siswa');
Route::get('/tambah', [SiswaController::class,'tambah'])->name('tambah');
Route::post('/insert', [SiswaController::class, 'insert'])->name('insert');
Route::get('/tampil/{p}', [SiswaController::class, 'tampil'])->name('tampil');
Route::post('/update/{p}', [SiswaController::class, 'update'])->name('update');
Route::get('/delete/{p}', [SiswaController::class, 'delete'])->name('delete');
Route::get('/pdf', [SiswaController::class, 'pdf'])->name('pdf');



Route::get('/nilai', [SiswaController::class,'nilai'])->name('nilai');
Route::get('/tambahn', [SiswaController::class,'tambahn'])->name('tambahn');
Route::post('/insertn', [SiswaController::class, 'insertn'])->name('insertn');
Route::get('/tampiln/{p}', [SiswaController::class, 'tampiln'])->name('tampiln');
Route::post('/updaten/{p}', [SiswaController::class, 'updaten'])->name('updaten');
Route::get('/delete/{p}', [SiswaController::class, 'deleten'])->name('deleten');
Route::get('nilai/export-pdf', [SiswaController::class, 'pdf2']);


Route::get('/', function () {
    return view('landing');
});
Route::get('/masuk', function () {
    return view('login');
});

Route::get('/masuk', [SiswaController::class, 'login'])->name('masuk')->middleware('guest');
Route::post('/loginproses', [SiswaController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [SiswaController::class, 'register'])->name('register');
Route::get('/registersiswa', [SiswaController::class, 'registersiswa'])->name('registersiswa');
Route::post('/simpanregister', [SiswaController::class, 'simpanregister'])->name('simpanregister');
Route::post('/simpansiswa', [SiswaController::class, 'simpansiswa'])->name('simpansiswa');


Route::group(['middleware' => ['auth', 'level:admin']], function () {

    Route::get('/indexadmin',[SiswaController::class,'indexadmin'])->name('indexadmin');
});
Route::group(['middleware' => ['auth','level:admin,guru']], function() {

    Route::get('/indexguru',[SiswaController::class,'indexguru'])->name('indexguru');

});
Route::group(['middleware' => ['auth','level:siswa']], function() {

    Route::get('/indexsiswa',[SiswaController::class,'indexsiswa'])->name('indexsiswa');

});

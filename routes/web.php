<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FauzanSyahController;
use App\Http\Controllers\LoginRegistController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('/Dashboard');
});

Route::get('/Dashboard', [FauzanSyahController::class, 'index'])->name('Dashboard')->middleware('auth');

///Route Insert
Route::get('/Tambah', [FauzanSyahController::class, 'insert'])->name('Tambah');
Route::post('/TambahData', [FauzanSyahController::class, 'insertdata'])->name('TambahData');

//Route Update
Route::get('/UpdateData/{id}', [FauzanSyahController::class, 'UpdateData'])->name('UpdateData');
Route::post('/QueryUpdate/{id}', [FauzanSyahController::class, 'QueryUpdate'])->name('QueryUpdate');

//Route Delete
Route::get('/QueryDelete/{id}', [FauzanSyahController::class, 'QueryDelete'])->name('QueryDelete');

///Route Login
Route::get('/Login', [LoginRegistController::class, 'Login'])->name('Login');
Route::post('/LoginQuery', [LoginRegistController::class, 'LoginQuery'])->name('LoginQuery');

///Route Regist
Route::get('/Regist', [LoginRegistController::class, 'Regist'])->name('Regist');
Route::post('/RegistQuery', [LoginRegistController::class, 'RegistQuery'])->name('RegistQuery');

///Logut
Route::get('/Logout', [LoginRegistController::class, 'Logout'])->name('Logout');
?>
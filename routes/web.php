<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\PelangganController; 
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservasiController;
use App\Models\Reservation;
use App\Http\Controllers\GalleryMenuController;
use App\Http\Controllers\ImageGalleryController;
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
    return view('welcome');
});


Route::get('home',[PortoController::class,'index']);

Route::get('web/beranda',[DinamisController::class,'beranda']);
Route::get('web/profil',[DinamisController::class,'profil']);
Route::get('web/kontak',[DinamisController::class,'kontak']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin']);

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/postregister',[AuthController::class,'postregister']);

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Report PDF
Route::get('/downloadpdf',[ReservationController::class,'downloadpdf']);
Route::get('/reservationpdf',function(){
    $pembayaran = reservation::with('pelanggan','pegawai','menu')->get();
    return view('admin.reservation.export', compact('reservation'));
});
//cetak struk
Route::get('reservation/{reservation}/cetakstruk',[ReservationController::class,'cetakstruk']);

Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store']);
Route::get('/pelanggan/{id}/edit',[PelangganController::class,'edit']);
Route::post('/pelanggan/{id}/update',[PelangganController::class,'update']);
Route::get('/pelanggan/{id}/delete',[PelangganController::class,'destroy']);
Route::get('/pelanggan/search',[PelangganController::class,'search']);

//1-n
//Route::get('/pelanggan/admin',[PelangganController::class,'admin']);


Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai/create',[PegawaiController::class,'create']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/{id}/edit',[PegawaiController::class,'edit']);
Route::post('/pegawai/{id}/update',[PegawaiController::class,'update']);
Route::get('/pegawai/{id}/delete',[PegawaiController::class,'destroy']);
Route::get('/pegawai/search',[PegawaiController::class,'search']);



Route::get('/menu',[MenuController::class,'index']);
Route::get('/menu/create',[MenuController::class,'create']);
Route::post('/menu/store',[MenuController::class,'store']);
Route::get('/menu/{id}/edit',[MenuController::class,'edit']);
Route::post('/menu/{id}/update',[MenuController::class,'update']);
Route::get('/menu/{id}/delete',[MenuController::class,'destroy']);
Route::get('/menu/search',[MenuController::class,'search']);


//Route::get('/gallerymenu',[GalleryMenuController::class,'index']);

Route::get('image-gallery',[ ImageGalleryController::class,'index']);
Route::post('image-gallery', [ImageGalleryController::class,'upload']);
Route::delete('image-gallery/{id}',[ImageGalleryController::class ,'destroy']);



Route::get('/reservation',[ReservationController::class,'index']);
Route::get('/reservation/create',[ReservationController::class,'create']);
Route::post('/reservation/store',[ReservationController::class,'store']);
Route::get('/reservation/{id}/edit',[ReservationController::class,'edit']);
Route::post('/reservation/{id}/update',[ReservationController::class,'update']);
Route::get('/reservation/{id}/delete',[ReservationController::class,'destroy']);
Route::get('/reservation/search',[ReservationController::class,'search']);

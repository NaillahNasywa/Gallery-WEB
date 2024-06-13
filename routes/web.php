<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\LikeFotosController;
use App\Http\Controllers\KomentarsController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/landingpage', function () {
    return view('landingpage.index');
})->name('landingpage.index');

Route::get('/landingpage/about', function () {
    return view('landingpage.about');
})->name('landingpage.about');

Route::get('/landingpage/jelajahi', function () {
    return view('landingpage.jelajahi');
})->name('landingpage.jelajahi');

Route::get('/landingpage/flowers', function () {
    return view('landingpage.flowers');
})->name('landingpage.flowers');

Route::get('/landingpage/Beautiful', function () {
    return view('landingpage.Beautiful');
})->name('landingpage.Beautiful');

Route::get('/landingpage/animal', function () {
    return view('landingpage.animal');
})->name('landingpage.animal');

Route::get('/landingpage/nwjns', function () {
    return view('landingpage.nwjns');
})->name('landingpage.nwjns');

Route::get('/landingpage/buat', function () {
    return view('landingpage.buat');
})->name('landingpage.buat');

Route::get('/landingpage/detail_foto', function () {
    return view('landingpage.detail_foto');
})->name('landingpage.detail_foto');

// Route::get('/landingpage/export', function () {
//     return view('landingpage.export');
// })->name('landingpage.export');

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/landingpage/profile', function () {
//     return view('landingpage.profile');
// })->name('landingpage.profile');

// Route::get('/fotosCreate', function () {
//     return view('fotosCreate');
// })->name('fotosCreate');

Route::get('/fotos/index', [FotosController::class, 'index'])->name('fotos.index');
// Route::get('/fotos/create', [FotosController::class, 'create'])->name('fotosCreate');
Route::get('/fotos/create', [FotosController::class, 'create'])->name('fotos.create');
Route::post('/fotos/store', [FotosController::class, 'store'])->name('fotos.store');
Route::get('/fotos/show/{id}', [FotosController::class, 'show'])->name('fotos.show');
Route::delete('/fotos/destroy/{id}', [FotosController::class, 'destroy'])->name('fotos.destroy');

Route::post('/albums/{album}/fotos', [FotosController::class, 'album'])->name('fotos.album');

Route::get('/fotos/dataTable', [FotosController::class, 'dataTable'])->name('landingpage.dataTable');

Route::get('/report', [ReportController::class, 'index'])->name('report.index');
// Route::get('/report/report', [ReportController::class, 'report'])->name('report.report');

Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/album', [ProfileController::class, 'album'])->name('profile.album');



// Route::get('/fotos/profile', [FotosController::class, 'profile'])->name('landingpage.profile');


Route::get('/albums/index', [AlbumController::class,'index'])->name('albums.index');
// Route::get('/albums/create', [AlbumController::class,'create'])->name('albums.create');
Route::post('/albums/store', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/show/{id}', [AlbumController::class, 'show'])->name('albums.show');
Route::get('/albums/edit/{id}', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/update/{id}', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('/albums/destroy/{id}', [AlbumController::class, 'destroy'])->name('albums.destroy');



Route::get('/albums/dataTable', [AlbumController::class, 'dataTable'])->name('landingpage.export');

Route::post('/likefoto/{id}', [LikefotosController::class, 'like'])->name('likefoto');
// Route::post('/fotos/{id}/like', [LikeFotosController::class, 'like'])->name('fotos.like');
// Route::delete('/fotos/{id}/unlike', [LikeFotosController::class, 'unlike'])->name('fotos.unlike');


Route::get('/komentars/index', [KomentarsController::class, 'index'])->name('komentars.index');
Route::post('/komentars/store', [KomentarsController::class, 'store'])->name('komentars.store');
Route::delete('/komentars/{id}', [KomentarsController::class, 'destroy'])->name('komentars.destroy');

// Route::delete('/komentars/{id}', [KomentarsController::class, 'destroy'])->name('komentars.destroy');

Route::get('User', [UserController::class, 'index'])->name('login');
Route::post('User/login', [UserController::class, 'login'])->name('User.login');
Route::get('User/logout', [UserController::class, 'logout'])->name('logout');
Route::get('User/register', [UserController::class, 'register'])->name('User.register');
Route::post('User/register', [UserController::class, 'create'])->name('create');

Route::get('/profile/edit', [UserController::class, 'editProfileForm'])->name('profile.edit');
Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

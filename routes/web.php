<?php

use App\Http\Controllers\InformasiController;
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
Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile"
    ]);
});

Route::get('/visimisi', function () {
    return view('visimisi',[
        "title" => "Visi Misi"
    ]);
});

Route::get('/ptk', function () {
    return view('ptk',[
        "title" => "PTK"
    ]);
});

Route::get('/prestasi', function () {
    return view('prestasi',[
        "title" => "Prestasi"
    ]);
});

Route::get('/kegiatan', function () {
    return view('kegiatan',[
        "title" => "Kegiatan"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri',[
        "title" => "Galeri"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "Kontak"
    ]);
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/fasilitas', function () {
    return view('fasilitas',[
        "title" => "Fasilitas Sekolah"
    ]);
});

Route::get('/denah', function () {
    return view('denah',[
        "title" => "Denah Sekolah"
    ]);
});

Route::get('/struktur', function () {
    return view('struktur',[
        "title" => "Struktur Organisasi"
    ]);
});

Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/', [InformasiController::class, 'beranda']);
Route::get('/informasi', [InformasiController::class, 'index']);
Route::get('/informasi/{post:slug}', [InformasiController::class, 'show']);

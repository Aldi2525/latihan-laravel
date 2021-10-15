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
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/sekolah', function () {
    return view('sekolah');
});

Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/cita', function () {
    return view('cita');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/biodata', function () {
    return view('biodata');
});


Route::get('page/{page?}', function($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function($nama = "Aldi") {
    return "<b>$nama</b>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $sa = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>";
        }
        if ($makanan != null && $minuman != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$sa";
});

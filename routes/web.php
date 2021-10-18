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

Route::get('profile', function () {
    $nama ="Aldi";
    return view('profile', compact('nama'));
});

Route::get('biodata2', function () {
    $nama ="Aldi";
    $umur = "18";
    $alamat = "Jl.Cangkuang wetan";
    $sekolah = "SMK Assalaam Bandung";
    $kelas = "XII RPL 2";
    $hobi = "Menonton,Workout";
    return view('biodata2', compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    return view('blog', compact('posts'));
});


Route::get('data', function () {
    $posts = [
        [
            'id' => 1, 'name' => 'Aldi Awaludin', 'username' => 'Aldi_2525' ,'email' => 'aldiawal12@gmail.com',
         'alamat' => 'Bandung', 'mapel' => [
             ['mapelar' => "Bahasa Indonesia"],
             ['mapelar' => "Bahasa Inggris"],
             ['mapelar' => "Bahasa Rusia"]
          ]
        ],

        [
            'id' => 2, 'name' => 'Sugaring', 'username' => 'sugaring' ,'email' => 'sugaring123@gmail.com',
         'alamat' => 'Bandung', 'mapel' => [
             ['mapelar' => "Bahasa Indonesia"],
             ['mapelar' => "Bahasa Inggris"],
             ['mapelar' => "Bahasa Rusia"]
          ]
        ],

        [
            'id' => 3, 'name' => 'Adeng', 'username' => 'Adeng2' ,'email' => 'adeng234@gmail.com',
         'alamat' => 'Bandung', 'mapel' => [
             ['mapelar' => "Bahasa Indonesia"],
             ['mapelar' => "Bahasa Inggris"],
             ['mapelar' => "Bahasa Rusia"]
          ]
        ],

        [
            'id' => 4, 'name' => 'Asep jepret', 'username' => 'Asep_jep' ,'email' => 'asepjejep12@gmail.com',
         'alamat' => 'Bandung', 'mapel' => [
             ['mapelar' => "Bahasa Indonesia"],
             ['mapelar' => "Bahasa Inggris"],
             ['mapelar' => "Bahasa Rusia"]
          ]
        ],

        [
            'id' => 5, 'name' => 'Isur Isbek', 'username' => 'isuranbek' ,'email' => 'isurisbek2345@gmail.com',
         'alamat' => 'Bandung', 'mapel' => [
             ['mapelar' => "Bahasa Indonesia"],
             ['mapelar' => "Bahasa Inggris"],
             ['mapelar' => "Bahasa Rusia"]
          ]
        ],

    ];

    return view('user', compact('posts'));
});

Route::get('/testmodel', function() {
$query =  App\Models\Post::all();
return $query;
});


Route::get('/about2', function() {
return view('about2');
});

Route::get('/biodatas', function() {
$query =  App\Models\Biodata::all();
return $query;
});

Route::get('/test-post', function() {
$query =  App\Models\Post::all();
return view('test-post', compact('query'));
});

Route::get('/bio', function() {
$query =  App\Models\Biodata::all();
return view('bio', compact('query'));
});

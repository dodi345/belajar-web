<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\MahasiswaController;

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
    return view('v-home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('v-about',[
        "title" => "About"
    ]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/contact', function () {
    return view('v-contact',[
        "title" => "Contact"
    ]);
});
// Route::get('/home', function () {
//     return view('v-home');
// });
Route::get('/dosen', function () {
    return view('v-dosen',[
        "title" => "Dosen"
    ]);
});
Route::get('/barang', function () {
    return view('v-barang');
});
Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/template', function(){
    return view('v-template');
});

// Route::get('contact', function () {
//     return view('v-contact');
// });

// Route::view('/contact', 'v-contact');

// Route::get('/about', function () {
//     return "<h1>SURPRISE</h1>";
// });


// Route::view('/contact', 'v-contact', [
//     'name' => 'Taylor',
//     'email' => 'dodi.10109016@student.polsub.ac.id'
// ]);

// Route::get('/mahasiswa/', function ($nama_mahasiswa = 'Dodi Sopandi') {
//     return view('v_mahasiswa', ['nama_mahasiswa2' => $nama_mahasiswa]);
// });

// Route::get('/mahasiswa2/{nama_mahasiswa}', function ($nama_mahasiswa) {
//     return view('v_mahasiswa2', ['nama_mahasiswa' => $nama_mahasiswa]);
// });

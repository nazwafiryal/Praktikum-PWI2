<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Nazwa Firyal Khansa',
        'kelas' => 'D4SM 48-02',
        'nim' => '707082400083'
    ]);
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::view('/contact', 'pages.contact');


// satu controller bisa memiliki beberapa method (perintah)
// untuk menampilkan data dari database
Route::get('/product', [ProductController::class, 'index']);
// menampilkan halaman form insert data (wajib di atas /product/{id})
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
// memasukan data dari form yang diisikan ke dalam database
Route::post('/product', [ProductController::class, 'store']);

// menampilkan detail data produk berdasarkan id tertentu
Route::get('/product/{id}', [ProductController::class, 'show']);

// menampilkan halaman form untuk merubah data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
// menyimpan data yang sudah dirubah pada form edit data
Route::put('/product/{id}', [ProductController::class, 'update']);

// menghapus data berdasarkan id yang kita pilih
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

// membuat routing menggunakan resource controller untuk kategori produk (dibuat pada B.3)
Route::get('/category', [CategoryController::class, 'index']);

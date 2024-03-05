<?php

Use App\Http\Controllers\HomeBarangController;
Use App\Http\Controllers\ListBarangController;
Use App\Http\Controllers\BioskopController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\BioskopKontroler;


Route::get('/', [HomeController::class,'index']);
Route::get('contact', [HomeController::class,'contact']);

// routes/web.php

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';     
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Route::get('/listbarang/{id}/{nama}',   function($id, $nama){
    // return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/login', [BioskopController::class, 'login']);
Route::get('/dashboard', [BioskopController::class, 'dashboard']);
Route::get('/listbioskop', [BioskopController::class, 'listbioskop']);
Route::get('/bioskop_view', [BioskopKontroler::class, 'tampilkan']);
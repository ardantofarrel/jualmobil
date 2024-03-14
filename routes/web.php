<?php

Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\ListBarangController;
Use App\Http\Controllers\BioskopController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\dashboardadmin;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\BioskopKontroler;
use App\Http\Controllers\etiket;
use App\Http\Controllers\pembayarancontroller;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\now_playing;
use App\Http\Controllers\up_coming;
use App\Http\Controllers\indexcontroller;



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


Route::get('/login', [BioskopController::class, 'login']);
Route::get('/dashboard', [BioskopController::class, 'dashboard']);
Route::get('/listbioskop', [BioskopController::class, 'listbioskop']);
Route::get('/bioskop_view', [BioskopKontroler::class, 'tampilkan']);


// Mazanda Task
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

// Farrel Task
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

// Faron Task
Route::get('/dashboardadmin', [dashboardadmin::class, 'dashboardadmin']);

//e-tiket
Route::get('/e-tiket', [etiket::class, 'etiket']);

//e-tiket
Route::get('/pembayaran', [pembayarancontroller::class, 'pembayaran']);

// profil
Route::get('/profil', [profilController::class, 'profil']);

Route::get('/nowplaying', [now_playing::class, 'nowplaying']);

Route::get('/upcoming', [up_coming::class, 'upcoming']);

Route::get('/index', [indexcontroller::class, 'index']);
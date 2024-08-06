<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Models\Product;

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
    return view('home');
});
Route::get('/roadmap', function(){
    return view('roadmap');
});
Route::get('/course/belajar-bahasa-pemrograman-python', function(){
    return view('pages.course.belajar-bahasa-pemrograman-python');
});
Route::get('/course/belajar-bahasa-pemrograman-python/persiapan', function(){
    return view('pages.course.belajar-bahasa-pemrograman-python.persiapan');
});
Route::get('/roadmap/machine-learning', function(){
    return view('pages.roadmap.machine-learning');
});
Route::get('/kelas', function(){
    return view('kelas');
});
Route::get('/kelas/machine-learning', function(){
    return view('pages.kelas.machine-learning');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('/order', [OrderController::class, 'createOrder']);
Route::get('/products', function (Request $request) {
    return Product::all();
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::post('/daftar', [RegisterController::class, 'daftar'])->name('daftar');
Route::get('/verify-email/{token}', [RegisterController::class, 'verifyEmail'])->name('verify.email');
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');




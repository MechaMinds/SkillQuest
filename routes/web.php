<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ProfileUpdateController;
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

Route::get('/profile', function () {
    return view('pages.profile.profile');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('pages.profile.profile');
    })->name('profile');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::post('/profile/updatePhoto', [ProfileController::class, 'updateProfilePhoto'])->name('profile.updatePhoto');
});
Route::middleware('auth')->post('/profile/update', [ProfileUpdateController::class, 'updateProfile'])->name('profile.update');
Route::post('/update-avatar', [AvatarController::class, 'update'])->name('profile.updateAvatar');




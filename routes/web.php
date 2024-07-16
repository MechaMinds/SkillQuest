<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
Route::get('/roadmap/machine-learning', function(){
    return view('pages.roadmap.machine-learning');
});
Route::get('/kelas', function(){
    return view('kelas');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');




<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/kelas/belajar-bahasa-pemrograman-python', function(){
    return view('pages.course.roadmap.kelas.belajar-bahasa-pemrograman-python');
});
Route::get('    ', function(){
    return view('pages.course.roadmap.machine-learning');
});
Route::get('/kelas', function(){
    return view('kelas');
});
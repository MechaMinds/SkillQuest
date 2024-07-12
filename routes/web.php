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
Route::get('course/materi/javascript', function(){
    return view('pages.course.materi.javascript');
});
Route::get('roadmap/machine-learning', function(){
    return view('pages.roadmap.machine-learning');
});
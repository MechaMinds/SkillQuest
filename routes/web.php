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
Route::get('roadmap/backend', function(){
    return view('pages.roadmap.backend');
});
Route::get('course/javascript', function(){
    return view('pages.course.javascript');
});
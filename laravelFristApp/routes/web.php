<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/student/cv/contact', function() {
    return view('student.cv.contact');
});

Route::get('/student/cv/education', function() {
    return view('student.cv.education');
});

Route::get('/student/cv/home', function() {
    return view('student.cv.home');
});

Route::get('/student/cv/project', function() {
    return view('student.cv.project');
});
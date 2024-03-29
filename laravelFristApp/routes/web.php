<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MyselfController;
use App\Http\Controllers\FormController;

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

Route::get('/student/cv/home', function() {
    return view('student.cv.home');
});
/*
Route::get('/student/cv/contact', function() {
    return view('student.cv.contact');
});

Route::get('/student/cv/education', function() {
    return view('student.cv.education');
});

Route::get('/student/cv/project', function() {
    return view('student.cv.project');
});
*/


Route::get('/student/cv/contact', [PagesController::class, 'contact']);
Route::get('/student/cv/education', [PagesController::class, 'education']);
Route::get('/student/cv/project', [PagesController::class, 'project']);

Route::get('/student/myslef/friend', [MyselfController::class, 'friend']);
Route::get('/student/myself/hobby', [MyselfController::class, 'hobby']);
Route::get('/student/myself/fan', [MyselfController::class, 'fan']);

Route::get('/student/myself/dynamicRouting/{name}/{id}', [MyselfController::class, 'dynamicRouting']);
Route::get('/student/myself/namedRouting', [MyselfController::class, 'namedRouting'])->name('namedRouting');
Route::get('/student/myself/namedDynamicRouting/{name}/{id}', [MyselfController::class, 'namedDynamicRouting'])->name('namedDynamicRouting');

Route::get('/registration', [FormController::class, 'registration'])->name('registration');

Route::post('/registration', [FormController::class, 'registrationSubmit'])->name('register.submit');
Route::get('/students/list',[FormController::class,'list'])->name('students.list');
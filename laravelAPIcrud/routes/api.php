<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student/get',[StudentController::class, 'allStudent'])->name('student');

Route::get('student/get/{id}',[StudentController::class, 'singleStudent'])->name('details');

Route::post('student/add',[StudentController::class, 'addStudent']);
//Route::post('student/add',[StudentController::class, 'addStudentSubmit'])->name('add.submit');

Route::get('student/edit/{id}',[StudentController::class, 'studentEdit'])->name('edit');
//Route::post('student/edit/{id}',[StudentController::class, 'studentEditSubmit'])->name('edit.submit');

Route::get('student/delete/{id}',[StudentController::class, 'studentDelete'])->name('delete');

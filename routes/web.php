<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

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

Route::get('/exams', [ExamController::class,'index']);
Route::get('/create-exam', [ExamController::class,'createPage']);
Route::get('/update-exam/{id}', [ExamController::class,'updatePage']);
Route::post('/save-exam', [ExamController::class,'saveExam'])->name('save.exam');
Route::post('/save-updated-exam', [ExamController::class,'updateExam'])->name('update.exam');
Route::get('/delete-exam', [ExamController::class,'deleteQuestion'])->name('delete.exam');


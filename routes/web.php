<?php

use App\Http\Controllers\studentController;
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

Route::get('/student', [studentController::class, 'index'])->name('index');
Route::post('/student', [studentController::class, 'create'])->name('create');
Route::get('/student/edit/{id}', [studentController::class, 'edit'])->name('edit');
Route::put('/student/edit/{id}', [studentController::class, 'update'])->name('update');
Route::get('/student/delete/{id}', [studentController::class, 'destroy'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

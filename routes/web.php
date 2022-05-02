<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::resource('courses', CourseController::class );

// Route::prefix('courses')->group(function (){
//     Route::get('/', [CourseController::class, 'index'])->name('courses.index');
//     Route::get('/create', [CourseController::class, 'create'])->name('courses.create');
//     Route::post('/create', [CourseController::class, 'store'])->name('courses.store');
//     Route::delete('/destroy/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
//     Route::get('/edit/{course}', [CourseController::class, 'edit'])->name('courses.edit');
//     Route::put('/edit/{course}', [CourseController::class, 'update'])->name('courses.update');

// });

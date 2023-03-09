<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;

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
    return view('welcome');
});

Route::get('/hello', [StudentController::class, 'hello'])->name("students.hello");
Route::get('/students_excel', [StudentController::class, 'excel'])->name("students.excel");
Route::get('/students_child', [StudentController::class, 'childPage'])->name("students.child");
Route::get('/students_app', [StudentController::class, 'AppPage'])->name("students.app");
Route::resource('students', StudentController::class);

Route::get('f1', [HotelController::class, 'f1'])->name("hotels.1");
Route::get('f2', [HotelController::class, 'f2'])->name("hotels.2");
Route::get('f3', [HotelController::class, 'f3'])->name("hotels.3");

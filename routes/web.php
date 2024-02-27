<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\HTTP\Controllers\StudentsController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

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

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Nadia",
        "kelas" => "11 PPLG 1",
        "foto" => "profile.png"
    ]);
});

// Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);
//Route::get('/eksktrakurikuler', [EkstrakurikulerController::class, 'Ekstrakurikuler'])->name('ekstrakurikuler');


Route::group(["prefix" => "/student"], function(){
    Route::get('/all', [StudentsController::class, 'index'])->name('student.all');
    Route::get('/detail/{student}', [StudentsController::class, 'show']); //detail
    Route::get('/create', [StudentsController::class, 'create']); //create data
    Route::post('/add', [StudentsController::class, 'store']); //add data
    Route::delete('/delete/{student}',[StudentsController::class, 'destroy']); //delete data
    Route::get('/edit/{student}', [StudentsController::class, 'edit']); //edit data
    Route::post('/update/{student}', [StudentsController::class, 'update']); //update data
});

Route::group(["prefix" => "/kelas"], function(){
    Route::get('/all', [KelasController::class, 'index'])->name('kelas.all');
    Route::get('/detail/{kelas}', [KelasController::class, 'show']); //detail
    Route::get('/create', [KelasController::class, 'create']); //create
    Route::post('/add', [KelasController::class, 'store']);//add
    Route::delete('/delete/{kelas}',[KelasController::class, 'destroy']); //delete data
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']); //edit data
    Route::post('/update/{kelas}', [KelasController::class, 'update']); //update data
});

Route::get('/login', [LoginController::class, 'loginPage'])->name('login.page');
Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');

// Login Action
Route::post('/login', [LoginController::class, 'login'])->name('login.exec');
Route::post('/register', [RegisterController::class, 'register'])->name('register.exec');

Route::group(["middleware" => "auth"], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});


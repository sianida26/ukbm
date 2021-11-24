<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::middleware('auth')->group(function () {
    Route::get('/home', function(){
        return view('welcome');
    })->name('home');

    Route::get('/profil', function(){
        return view('profile');
    })->name('profile');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //RUTE UNTUK GURU
    Route::group(['middleware' => ['role:guru']], function () {
        
        Route::get('/dashboard', function(){
            return view('guru.dashboard');
        })->name('dashboard');
    });
});

Route::middleware('guest')->group(function(){
    Route::get('/login', function(){
        return view('login');
    });
    
    Route::post('/login', [AuthController::class, 'login'] )->name('login');
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

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

        Route::get('/kelas', [KelasController::class, 'index']);
        Route::delete('/kelas/delete', [KelasController::class, 'destroy'])->name('kelas.destroy');
        Route::get('/kelas/buat', [KelasController::class, 'viewCreate']);
        Route::post('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
        Route::post('/kelas/edit', [KelasController::class, 'edit'])->name('kelas.editView');
        Route::post('/kelas/submitEdit', [KelasController::class, 'editSubmit'])->name('kelas.edit');

        //siswa route group
        Route::group(['prefix' => 'siswa'], function () {
            Route::view('/', 'guru.siswa.index');
            Route::view('/buat', 'guru.siswa.form', ['isEdit' => false]);
            Route::post('/editView', [SiswaController::class, 'editView'])->name('siswa.editView');
            Route::post('/create', [SiswaController::class, 'create'])->name('siswa.create');
            Route::post('/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
            Route::delete('/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');
            // Route::post('/{id}/submitEdit', [KelasController::class, 'siswaEditSubmit'])->name('siswa.editSubmit');
            // Route::delete('/{id}/delete', [KelasController::class, 'siswaDestroy'])->name('siswa.destroy');
        });
    });

    //RUTE UNTUK SISWA DAN GURU
    Route::group(['middleware' => ['role:siswa|guru']], function () {
        Route::get('/', function () {
            return view('welcome');
        });

        //materi group
        Route::group(['prefix' => 'materi'], function () {
            Route::view('/', 'materi.index');
            Route::view('/pendahuluan', 'materi.pendahuluan')->name('materi.pendahuluan');
            Route::view('/teori-atom', 'materi.teoriAtom')->name('materi.teoriAtom');
        });

        Route::view('/cara-penggunaan', 'siswa.caraPenggunaan');
    });
});

Route::middleware('guest')->group(function(){
    Route::get('/login', function(){
        return view('login');
    });
    
    Route::post('/login', [AuthController::class, 'login'] )->name('login');
});

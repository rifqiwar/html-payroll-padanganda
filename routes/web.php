<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\UserController;
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
    return view('admin.pages.login.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard',[DashboardController::class, 'dashboardAdmin'])->name('dashboard');
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('gaji', GajiController::class);
    Route::resource('user', UserController::class);
});



require __DIR__.'/auth.php';

<?php

//Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\QuickCountController;
use App\Http\Controllers\Admin\DataSuaraController;
use App\Http\Controllers\Admin\DataSaksiController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ReportController;
// Saksi
use App\Http\Controllers\Saksi\InputDataPilgubController;
use App\Http\Controllers\Saksi\InputDataPilkadaController;
use App\Http\Controllers\AuthAdminController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::resource('/auth-admin-golkar', AuthAdminController::class);


Route::prefix('author')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session')
    ])->group(function () {
        //ADMIN
        Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');
        Route::resource('/quick-count', QuickCountController::class);
        Route::resource('/data-suara', DataSuaraController::class);
        Route::resource('/data-saksi', DataSaksiController::class);
        Route::resource('/users', UsersController::class);
        Route::resource('/report', ReportController::class);

        //SAKSI
        Route::resource('/input-data-pilkada', InputDataPilkadaController::class);
        Route::resource('/input-data-pilgub', InputDataPilgubController::class);
    });

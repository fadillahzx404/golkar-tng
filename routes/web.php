<?php

//Admin

use App\Http\Controllers\Admin\DataSuaraController;
use App\Http\Controllers\Admin\DataSaksiController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\AppController;
// Saksi
use App\Http\Controllers\Saksi\InputDataPilgubController;
use App\Http\Controllers\Saksi\InputDataPilkadaController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersApiController;
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
    return view('welcome');
});

Route::get('districts', [AppController::class, 'districts'])->name('districts');

Route::resource('/auth-admin-golkar', AuthAdminController::class);



Route::prefix('author')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session')
    ])->group(function () {
        //ADMIN
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/input-saksi/{id}', [DashboardController::class, 'show'])->name('show-input-saksi');
        Route::resource('/data-suara', DataSuaraController::class);
        Route::resource('/data-saksi', DataSaksiController::class);
        Route::resource('/users', UsersController::class);
        Route::get('/users-json', [UsersController::class, 'data'])->name('users.data');
        Route::resource('/report', ReportController::class);
        Route::post('/import-users', [AppController::class, 'import'])->name('import.users');
        Route::post('/rekap-export', [AppController::class, 'export'])->name('export.rekap');


        //SAKSI
        Route::resource('/input-data-pilkada', InputDataPilkadaController::class);
        Route::get('/dashboard/ubah-saksi-pilkada/{id}', [InputDataPilkadaController::class, 'edit'])->name('ubah-input-pilkada-saksi');
        Route::get('/dashboard/ubah-saksi-pilgub/{id}', [InputDataPilgubController::class, 'edit'])->name('ubah-input-pilgub-saksi');
        Route::post('/save-pilkada', [InputDataPilkadaController::class, 'store'])->name('save-pilkada');
        Route::patch('/update-pilkada/{id}', [InputDataPilkadaController::class, 'update'])->name('update-pilkada');
        Route::patch('/update-pilgub/{id}', [InputDataPilgubController::class, 'update'])->name('update-pilgub');
        Route::resource('/input-data-pilgub', InputDataPilgubController::class);
        Route::post('/save-pilgub', [InputDataPilgubController::class, 'store'])->name('save-pilgub');

        //Export Excel


    });

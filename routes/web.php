<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('user.welcome');
// });

Route::prefix('')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/success', function(){
        return view('user.success');
    });
});

Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('list', [AdminController::class, 'show'])->name('admin.list');
    Route::get('checkin', [AdminController::class, 'checkin'])->name('admin.checkin');
    Route::get('edit-list/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('update-list/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('ticket-check', [AdminController::class, 'ticket_check'])->name('admin.ticket');
    Route::view('sukses', 'admin.update-status');
    Route::view('gagal', 'admin.tidak-valid');
    Route::view('sudah-terpakai', 'admin.sudah-terpakai');
});
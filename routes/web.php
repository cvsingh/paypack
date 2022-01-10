<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\files\FilesController;



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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

// User Management All Users

Route::prefix('users')->group(function() {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

// File Management

Route::prefix('files')->group(function() {
    Route::get('/view', [FilesController::class, 'FileView'])->name('files.view');
    Route::get('/add', [FilesController::class, 'FileAdd'])->name('files.add');
    Route::post('/store', [FilesController::class, 'fileStore'])->name('files.store');
    Route::get('/edit/{id}', [FilesController::class, 'fileEdit'])->name('files.edit');
    Route::post('/update/{id}', [FilesController::class, 'fileUpdate'])->name('files.update');
    Route::get('/delete/{id}', [FilesController::class, 'fileDelete'])->name('files.delete');
    
});
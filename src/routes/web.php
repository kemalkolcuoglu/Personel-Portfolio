<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

Route::get('/admin/login', function() {
    return view('auth.login');
});
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/showPost/{id}', [AdminController::class, 'showPost'])->name('admin.showPost')->middleware('auth');
Route::get('/admin/addPost/', [AdminController::class, 'addPost'])->name('admin.addPost')->middleware('auth');
Route::post('/admin/storePost/', [AdminController::class, 'storePost'])->name('admin.storePost')->middleware('auth');
Route::get('/admin/editPost/{id}', [AdminController::class, 'editPost'])->name('admin.editPost')->middleware('auth');
Route::put('/admin/updatePost/{id}', [AdminController::class, 'updatePost'])->name('admin.updatePost')->middleware('auth');
Route::delete('/admin/deletePost/{id}', [AdminController::class, 'deletePost'])->name('admin.deletePost')->middleware('auth');

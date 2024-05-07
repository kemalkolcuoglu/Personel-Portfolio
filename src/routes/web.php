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


Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories')->middleware('auth');
Route::get('/admin/addCategory/', [AdminController::class, 'addCategory'])->name('admin.addCategory')->middleware('auth');
Route::post('/admin/storeCategory/', [AdminController::class, 'storeCategory'])->name('admin.storeCategory')->middleware('auth');
Route::get('/admin/editCategory/{id}', [AdminController::class, 'editCategory'])->name('admin.editCategory')->middleware('auth');
Route::put('/admin/updateCategory/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory')->middleware('auth');
Route::delete('/admin/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory')->middleware('auth');


Route::get('/docpage/', function () {
    return view('docpage');
});

Route::get('/blogpage/', function() {
    return view('blogpage');
});
<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeController;
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



Route::get('/', [WelcomeController::class, 'index'])->name('/');;    

Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/back/users', [UserController::class, 'index'])->name('user.index');
Route::get('/back/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/back/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/back/users/{id}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/back/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/back/users/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');

Route::resource('/back/service', ServiceController::class);

Route::resource('/back/testimonial', TestimonialController::class);
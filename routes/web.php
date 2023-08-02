<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Baza\BazaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiteController\SiteController;
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



Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/booking', [SiteController::class, 'booking']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/menu', [SiteController::class, 'menu']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/team', [SiteController::class, 'team']);
Route::get('/testimonial', [SiteController::class, 'testimonial']);


Route::post('/store', [BazaController::class, 'store'])->name('store');


Route::prefix('admin/')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



   

});





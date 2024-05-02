<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\frontendController;
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

Route::get('/', [frontendController::class, 'welcome']);
Route::get('/description/{id}', [frontendController::class, 'description']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ["auth", "admin",]], function () {
    // Route::get('/add', [frontendController::class, 'addblog']);
    Route::post('/store-blog', [BlogController::class, 'store']);
    Route::get('/add-blog', [BlogController::class, 'index']);
    Route::get('/delete-items/{id}', [BlogController::class, 'destroy']);
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit']);
    Route::post('/update-blog/{id}', [BlogController::class, 'update']);
});

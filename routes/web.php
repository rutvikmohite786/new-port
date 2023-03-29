<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'],'prefix' => 'admin/about'], function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('/', 'index')->name('index.user');
        Route::get('/add', 'add')->name('about.add');
        Route::post('/store', 'store')->name('about.store');
    });
});



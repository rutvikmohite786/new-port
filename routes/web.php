<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\ServiceController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('admin/about', 'index')->name('index.user');
        Route::get('admin/about/add', 'add')->name('about.add');
        Route::get('admin/about/edit', 'edit')->name('about.edit');
        Route::post('admin/about/store', 'store')->name('about.store');
    });

    Route::controller(TechnologyController::class)->group(function () {
        Route::get('/admin/tech', 'index')->name('index.tech');
        Route::get('/admin/tech/add', 'add')->name('tech.add');
        Route::get('/admin/tech/edit', 'edit')->name('tech.edit');
        Route::post('/admin/tech/store', 'store')->name('tech.store');
    });

    Route::controller(ServiceController::class)->group(function () {
        Route::get('/admin/service', 'index')->name('index.service');
        Route::get('/admin/service/add', 'add')->name('service.add');
        Route::get('/admin/service/edit', 'edit')->name('service.edit');
        Route::post('/admin/service/store', 'store')->name('service.store');
    });
});

Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('portfolio.page');
});



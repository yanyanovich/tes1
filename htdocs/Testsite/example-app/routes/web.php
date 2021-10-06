<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\main\indexController;

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
//     return view('main_page.welcome');})->name('main');;



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index1'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    //
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('post', App\Http\Controllers\Admin\PostController::class);
    // Route::resource('tag', App\Http\Controllers\Admin\TagController::class);
    Route::resource('tag', 'App\Http\Controllers\Admin\TagController', ['except' => 'show']);
});


Route::get('/{id}', 'App\Http\Controllers\main\BlogController@show')->name('show');
Route::get('/', 'App\Http\Controllers\main\indexController@index')->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

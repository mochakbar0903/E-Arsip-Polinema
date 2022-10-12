<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Storage;

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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    // Download_PDF
    Route::get('/download/{filename}', function ($filename) {
        $header = array(
            'Content-Type: application/pdf',
        );
        return Storage::download('public/' . $filename, $filename, $header);
    })->name('download');

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
    Route::get('add_arsip', [PageController::class, 'create'])->name('add_arsip');
    Route::put('store_arsip', ['as' => 'arsip.store', 'uses' => 'App\Http\Controllers\PageController@store']);
    Route::get('destroy/{id}', [PageController::class, 'destroy'])->name('destroy');
    Route::get('lihat/{id}', [PageController::class, 'show'])->name('lihat');
    Route::get('edit/{id}', [PageController::class, 'showedit'])->name('edit');
    Route::post('updatee/{id}', [PageController::class, 'update'])->name('updatee');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
// 	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
// 	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
// 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);

// Route::get('/edit_Page/{id}', [PageController::class, 'edit_Page'])->name('edit_Page');
// Route::post('/update_Page/{id}', [PageController::class, 'update_Page'])->name('update_Page');
// Route::get('/delete_Page/{id}', [PageController::class, 'delete_barang'])->name('delete_barang');

// });

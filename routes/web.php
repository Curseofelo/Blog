<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');



Route::get('/main','App\Http\Controllers\MainCOntroller@index')->name('main.index');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/post','IndexController')->name('post.index');
    Route::get('/post/create','CreateController')->name('post.create');
    Route::post('/post','StoreController')->name('post.store');
    Route::get('post/{post}','ShowController')->name('post.show');
    Route::get('post/{post}/edit','EditController')->name('post.edit');
    Route::patch('post/{post}','UpdateController')->name('post.update');
    Route::delete('post/{post}','DestroyController')->name('post.delete');
});


Route::group(['namespace' => 'App\Http\Controllers\Car'], function () {
    Route::get('/car','IndexController')->name('car.index');
    Route::get('/car/create','CreateController')->name('car.create');
    Route::post('/car','StoreController')->name('car.store');
    Route::get('/car/{car}','ShowController')->name('car.show');
    Route::get('car/{car}/edit','EditController')->name('car.edit');
    Route::patch('car/{car}','UpdateController')->name('car.update');
    Route::delete('car/{car}','DestroyController')->name('car.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Book'], function () {
    Route::get('/book','IndexController')->name('book.index');
    Route::get('book/create','CreateController')->name('book.create');
    Route::post('/book', 'StoreController')->name('book.store');
    Route::get('/book/{book}','ShowController')->name('book.show');
    Route::get('/book/{book}/edit','EditController')->name('book.edit');
    Route::patch('/book/{book}','UpdateController')->name('book.update');
    Route::delete('/book/{book}','DestroyController')->name('book.destroy');
});


Route::group(['namespace' => 'App\Http\Controllers\Game'],function () {
    Route::get('/games','IndexController')->name('game.index');
    Route::get('/games/create','CreateController')->name('game.create');
    Route::post('/games','StoreController')->name('game.store');
    Route::get('/games/{game}','ShowController')->name('game.show');
    Route::get('/games/{game}/edit','EditController')->name('game.edit');
    Route::patch('/games/{game}','UpdateController')->name('game.update');
    Route::delete('/games/{game}','DestroyController')->name('game.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Movie'], function () {
    Route::get('/movie','IndexController')->name('movie.index');
    Route::get('/movie/create','CreateController')->name('movie.create');
    Route::post('/movie','StoreController')->name('movie.store');
    Route::get('/movie/{movie}','ShowController')->name('movie.show');
    Route::get('/movie/{movie}/edit','EditController')->name('movie.edit');
    Route::patch('/movie/{movie}','UpdateController')->name('movie.update');
    Route::delete('/movie/{movie}','DestroyController')->name('movie.destroy');
});


Route::get('/music','App\Http\Controllers\MusicController@index')->name('music.index');
Route::get('/music/create','App\Http\Controllers\MusicController@create')->name('music.create');
Route::post('/music','App\Http\Controllers\MusicController@store')->name('music.store');
Route::get('/music/{music}','App\Http\Controllers\MusicController@show')->name('music.show');
Route::get('/music/{music}/edit','App\Http\Controllers\MusicController@edit')->name('music.edit');
Route::patch('/music/{music}','App\Http\Controllers\MusicController@update')->name('music.update');
Route::delete('/music/{music}','App\Http\Controllers\MusicController@delete')->name('music.destroy');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

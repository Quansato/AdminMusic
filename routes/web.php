<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenresController;

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

Route::get('/admin', 'App\Http\Controllers\AdminController@loginAdmin');

Route::post('/admin', 'App\Http\Controllers\AdminController@postloginAdmin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('songs')->group(function () {
    Route::get('/index', [
        'as' => 'songs.index',
        'uses' => 'App\Http\Controllers\SongController@index'
    ]);

    Route::get('/create', [
        'as' => 'songs.create',
        'uses' => 'App\Http\Controllers\SongController@create'
    ]);
    
    Route::post('/store', [
        'as' => 'songs.store',
        'uses' => 'App\Http\Controllers\SongController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'songs.edit',
        'uses' => 'App\Http\Controllers\SongController@edit'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'songs.delete',
        'uses' => 'App\Http\Controllers\SongController@delete'
    ]);
});

Route::prefix('genres')->group(function () {
    Route::get('/index', [
        'as' => 'genres.index',
        'uses' => 'App\Http\Controllers\GenresController@index'
    ]);
    //gotoviewtheem
    Route::get('/create', [
        'as' => 'genres.create',
        'uses' => 'App\Http\Controllers\GenresController@create'
    ]);
    ///Theem
    Route::post('/store', [
        'as' => 'genres.store',
        'uses' => 'App\Http\Controllers\GenresController@store'
    ]);
    //gotoviewedit
    Route::get('/edit/{id}', [
        'as' => 'genres.edit',
        'uses' => 'App\Http\Controllers\GenresController@edit'
    ]);
    //edit
    Route::post('/update/{id}', [
        'as' => 'genres.update',
        'uses' => 'App\Http\Controllers\GenresController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'genres.delete',
        'uses' => 'App\Http\Controllers\GenresController@delete'
    ]);
});


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
Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/dogs', 'PagesController@index');

Route::get('/dogs/{id}/show', 'PagesController@show');


Route::middleware(['auth', 'admin'])->group(function(){

    Route::get('/admin', 'AdminController@home');

    Route::get('/admin/dogs', 'Admin\DogsController@index');

    Route::get('/admin/dogs/create', 'Admin\DogsController@create');

    Route::post('/admin/dogs/create', 'Admin\DogsController@store');
    
    Route::delete('/admin/dogs', 'Admin\DogsController@destroy');

    Route::get('/admin/dogs/{id}/edit', 'Admin\DogsController@edit');

    Route::put('/admin/dogs', 'Admin\DogsController@update');
    
    

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

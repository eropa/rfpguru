<?php

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

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin/test','HomeController@testpage')->name('test');

Route::middleware(['web'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Тестовая запись
        //Route::get('test','AdminController@index')->name('admin_index');
        Route::get('/','AdminController@index')->name('admin_index');
        // группа новостей
        Route::resource('tagnew', 'ModelsTagnewController');
        // Новости
        Route::resource('new', 'ModelsNewsController');
        // Группа страниц
        Route::resource('tagpage', 'ModelsTagpageController');
        // Страница
        Route::resource('page', 'ModelsPageController');
    });
});
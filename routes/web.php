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

Route::get('/','MainController@IndexPage', function () {
});

Route::get('/fotoalbom','MainController@FotoAlbomPage', function () {
});

Route::get('/fotoalbom/{id}','MainController@FotoAlbomFotoPage', function () {
});

Route::get('/new/{slug}','MainController@NewShowPage', function () {
});

Route::get('/news/{list?}','MainController@NewsShowList', function ($list = 1) {
});

Route::get('/sveden','MainController@SvedPage', function () {
});


Route::get('/abitur','MainController@AbiturPage', function () {
});

//Auth::routes();


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin/test','HomeController@testpage')->name('test');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Главная страница
        Route::get('/','AdminController@index')->name('admin_index');
        // группа новостей
        Route::resource('tagnew', 'ModelsTagnewController');
        // Новости
        Route::resource('new', 'ModelsNewsController');
        // Группа страниц
        Route::resource('tagpage', 'ModelsTagpageController');
        // Страница
        Route::resource('page', 'ModelsPageController');
        // Страница
        Route::resource('option', 'OptionController');

        // Пользователи
        Route::get('/user','ShowProfile@ShowAdminList', function () {});
        // Пользователи
        Route::get('/user/{id}/edit','ShowProfile@EditUser', function ($id) {});
        Route::post('/userupdate/{id}','ShowProfile@EditUserStore',function ($id) {});
        Route::post('/userpassword/{id}','ShowProfile@EditUserPassStore',function ($id) {});
        Route::get('/user/create','ShowProfile@CreateUser', function () {});
        Route::post('/user','ShowProfile@CreateUserStore', function () {});
        Route::delete('user/{id}','ShowProfile@DeleteUser', function () {});

        // Фото
        Route::resource('fotoalbom', 'FotoHeadController');
        Route::get('fotos/{id}','FotoBodyController@index');
        Route::get('foto/create/{id}','FotoBodyController@create');
        Route::post('foto','FotoBodyController@store');
        Route::delete('foto/{id}','FotoBodyController@destroy',function ($id) {});
    });
});

Route::get('/{urlpage}','MainController@PageVar1',function (){
});

Route::get('/{name1}/{name2}','MainController@PageVar2', function ($name1,$name2) {
});
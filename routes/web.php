<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\Auth\RegisterController;

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

Route::get('/','HomeController@index')->name('home');
Route::post('/loginUser', 'Auth\LoginController@loginSubmit')->name('signin');

Auth::routes();
Route::get('/register', 'Auth\RegisterController@registerForm')->name('register');

Route::post('/registerUser', 'Auth\RegisterController@create')->name('signup');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return '/';
});

Route::get('/profile/user/{id?}','UserController@profile')->name('profile');
Route::get('/profile/books/{id?}','UserController@books')->name('profile.books');
Route::get('/profile/edit','UserController@edit')->name('profile.edit');
Route::put('/profile/update','UserController@update')->name('profile.update');
Route::get('/profile/change','UserController@change')->name('profile.change');
Route::put('/profile/changePass','UserController@changePass')->name('profile.changePass');
Route::get('/books/geDepartments','BookController@getDepartmentList');
Route::post('profileBook/search','UserController@search')->name('profile.books.search');

Route::prefix('books')->group(function () {
    Route::get('/','BookController@index')->name('books.index');
    Route::post('/college/booksget','BookController@collegeBook')->name('books.college');
    Route::post('/search','BookController@search')->name('books.search');
    Route::get('/create','BookController@create')->middleware('auth')->name('books.create');
    
    Route::get('/show/{id}','BookController@show')->name('books.show');
        Route::post('/store','BookController@store')->middleware('auth')->name('books.store');
        Route::get('/edit/{id}','BookController@edit')->middleware('auth')->name('books.edit');
        Route::put('/update/{id}','BookController@update')->middleware('auth')->name('books.update');
        Route::get('/destroy/{id}','BookController@destroy')->middleware('auth')->name('books.destroy');

    

        Route::get('contact-us','ContactUsController@index');
Route::post('contact-us','ContactUsController@handleForm');
    
});
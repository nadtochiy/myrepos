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

Route::get('/about', 'AboutController@about');

Route::get('/main', 'BlogController@index');

Route::get('/show/{blog}', 'BlogController@show')->name('blog.show');

Route::get('/add', function () {
    return view('add');
});
Route::post('/create', 'BlogController@insert');

Route::post('/fred/{blog}', 'BlogController@change')->name('blog.change');

Route::get('/redact/{blog}', 'BlogController@red')->name('blog.red');

Route::get('/delete/{blog}', 'BlogController@delete')->name('blog.del');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

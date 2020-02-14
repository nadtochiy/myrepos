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

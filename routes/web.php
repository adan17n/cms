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

Route::get('/','FrontController@index');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dblog','BlogController@index');
    Route::get('dblog/tambah','BlogController@tambah');
    Route::get('/keluar','BlogController@keluar');
    Route::post('/dblog/create','BlogController@create');
    Route::get('/dblog/edit/{id}', 'BlogController@edit');

    Route::get('/auto','BackController@auto');

Route::get('/dblog/delete/{id}','BlogController@delete');
Route::post('/dblog/update/{id}','BlogController@update');
Route::get('/dblog/cari','BlogController@cari');
Route::get('/dgambar','BackController@gambar');
Route::get('/dgambar/tambah','BackController@tambah');
Route::post('/dgambar/store','BackController@store');
Route::get('/dgambar/delete/{id}','BackController@delete');
Route::get('/home', 'BackController@home')->name('home');


});

Route::get('/contact','FrontController@contact');
Route::post('/contact/kirim','FrontController@contactKirim');



Route::get('/blog','FrontController@blog');
Route::get('/blog/detail/{id}','FrontController@detail');
Route::get('/gallery','FrontController@gambar');
Route::get('/adan','BackController@adan');
Route::get('/adan/show/{id}','BackController@apishow');
Route::get('/adan/buat','BackController@new');
Route::post('/adan/store','BackController@create');

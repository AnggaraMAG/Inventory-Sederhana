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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@home')->name('layouts.home');
Route::get('/inventory','ProductController@index')->name('products.index');
Route::get('/add','ProductController@create')->name('products.add');
Route::post('/store','ProductController@store')->name('products.store');
Route::get('/edit/{id}','ProductController@edit')->name('products.edit');
Route::put('/update/{id}','ProductController@update')->name('products.update');
Route::delete('/destroy/{id}','ProductController@destroy')->name('products.destroy');

Route::get('/tambah' ,'SupplierController@create')->name('supplier.tambah');
Route::post('/simpansupplier','SupplierController@store')->name('supplier.store');

<?php
Route::get('/', 'ProductController@index')->name('home');

/********** Routes products  **********/
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store')->name('products');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products/update/{product}', 'ProductController@update')->name('products.update');
/********** End Routes products  **********/

Auth::routes();

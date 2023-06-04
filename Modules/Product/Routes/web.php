<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
    //Print Barcode
    Route::get('/products/print-barcode', 'BarcodeController@printBarcode')->name('barcode.print');
    //Product
    Route::resource('products', 'ProductController');
    //Kategori Produk
    Route::resource('product-categories', 'CategoriesController')->except('create', 'show');
});


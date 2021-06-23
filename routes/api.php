<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('barang', 'API\ProductController@index');
Route::get('barang/{data}', 'API\ProductController@show');

Route::get('kategori', 'API\CategoryController@index');
Route::get('kategori/{data}', 'API\CategoryController@show');


//tambah data 
Route::post('barang', 'API\ProductController@store');
//hapus data
Route::delete('barang/{id}', 'API\ProductController@destroy');

Route::post('kategori', 'API\CategoryController@store');
Route::delete('kategori/{id}', 'API\CategoryController@destroy');
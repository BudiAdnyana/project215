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


Route::get('/mahasiswa', function() {
	echo 'Mahasiswa';

});

//routing dengan parameter
Route::get('/ubg/ilkom/mahasiswa/{semester}/{nim}', function($semester,$nim) {
	return 'Mahasiswa ILKOM Universitas Bumigora -Semester : ' . $semester . ' -NIM : ' . $nim;
});

Route::redirect('/login','/masuk');

//group route

Route::get('/admin/mahasiswa', function(){
	return 'Admin Mahasiswa';
});

Route::get('/admin/dosen', function(){
	return 'Admin Dosen';
});

Route::get('/admin/pegawai', function(){
	return 'Admin Pegawai';
});




//route untuk product
Route::get('product', 'ProductController@index')->name('product.index');
/*Route::resource('product', 'ProductController');*/

Route::get('product/add', 'ProductController@add')->name('product.add');

Route::post('product/save', 'ProductController@save')->name('product.save');

//route untuk category
Route::get('category','CategoryController@index')->name('category.index');

Route::get('category/add', 'CategoryController@add')->name('category.add');

Route::post('category/save', 'CategoryController@save')->name('category.save');


Route::get('mid', 'UtsController@index')->name('mid.index');
Route::get('mid/add', 'UtsController@add')->name('mid.add');
Route::post('mid/save', 'UtsController@save')->name('mid.save');

Route::get('mid/{id_215}/delete', 'UtsController@delete');
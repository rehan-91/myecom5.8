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
	
	$categories = App\Category::all();
    return view('index', compact('categories'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){
	Route::resource('/','AdminController');
	Route::resource('/product','ProductController');
	Route::resource('/category','CategoryController');
	Route::resource('/subcategory','SubcategoryController');
	
});
 
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
    return view('header');
});

Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/otherdatabase','MultidatabaseController@fetchDataFromOtherDatabase');

Route::get('/dashboard','admin@index');
Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');



Auth::routes();

Route::get('/attribute', 'AttributeController@index')->name('attribute');
Route::get('/attribute_create', 'AttributeController@create')->name('attribute_create');
Route::post('/attribute_store', 'AttributeController@store')->name('attribute_store');
Route::get('/attribute_edit/{id}', 'AttributeController@edit')->name('attribute_edit');
Route::post('/attribute_update', 'AttributeController@update')->name('attribute_update');

Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category_create', 'CategoryController@create')->name('category_create');
Route::post('/category_store', 'CategoryController@store')->name('category_store');
Route::get('/category_edit/{id}', 'CategoryController@edit')->name('category_edit');
Route::post('/category_update', 'CategoryController@update')->name('category_update');

Route::get('/subcategory', 'SubcategoryController@index')->name('subcategory');
Route::get('/subcategory_create', 'SubcategoryController@create')->name('subcategory_create');
Route::post('/subcategory_store', 'SubcategoryController@store')->name('subcategory_store');
Route::get('/subcategory_edit/{id}', 'SubcategoryController@edit')->name('subcategory_edit');
Route::post('/subcategory_update', 'SubcategoryController@update')->name('subcategory_update');

Route::get('/AttributeValue', 'AttributeValueController@index')->name('AttributeValue');



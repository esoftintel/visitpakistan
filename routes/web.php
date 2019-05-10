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
    return view('user.post.post_create');
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


Route::resource('attributer','AttributeController');
Route::get('/attribute', 'AttributeController@index')->name('attribute');
Route::get('/attribute_create', 'AttributeController@create')->name('attribute_create');
Route::post('/attribute_store', 'AttributeController@attribute_store')->name('attribute_store');
Route::get('/attribute_delete/{id}','AttributeController@destroy');


Route::resource('category','CategoryController');
Route::get('/category_list', 'CategoryController@index')->name('category');
Route::get('/category_create', 'CategoryController@create')->name('category_create');
Route::post('/category_store', 'CategoryController@store')->name('category_store');
Route::get('/category_edit/{id}', 'CategoryController@edit')->name('category_edit');
Route::post('/category_update', 'CategoryController@update')->name('category_update');
Route::get('/category_delete/{id}','CategoryController@category_delete');

Route::resource('subcategory','SubcategoryController');
Route:: get('/subcategory_delete/{id}','SubcategoryController@distory');

Route::resource('attribute_value','AttributeValueController');
Route::get('/AttributeValue', 'AttributeValueController@index')->name('AttributeValue');
Route::get('/at_value_delete/{id}','AttributeValueController@destroy');


Route::get('/home', 'HomeController@index')->name('home');

///rout for get dynamic value for subcategory
Route::get('/getsubcategory/{id}', 'AttributeController@getcategory');
Route::get('/getattribute/{id}', 'AttributeController@getattribute');


//////////////////////////////user side route here /////////////////////////
Route::get('/category_show', 'FrontController@create')->name('category_show');





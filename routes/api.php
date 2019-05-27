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

Route::post('/register', '\App\Http\Controllers\API\test_api@add_user');
Route::post('/login', '\App\Http\Controllers\API\test_api@login');

/// passport auth_api routes
Route::post('login', 'API\auth_api@login');
Route::post('register', 'API\auth_api@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\auth_api@details');
    });

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('users','API\auth_api@getAllUsers');
    });
    

    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('categories','API\auth_api@getAllCategories');
        });
        Route::group(['middleware' => 'auth:api'], function(){
            Route::post('category_add','API\auth_api@category_add');
            });
            
    Route::group(['middleware' => 'auth:api'], function(){
                Route::get('category_posts/{id}','API\post_api@category_post');
                Route::get('all_categories_posts','API\post_api@all_categories_post');
                Route::get('categoryPosts/{id}','API\post_api@postsOfCategory');
                Route::get('post_details/{id}','API\post_api@post_details');
                Route::post('/like', 'API\post_api@like_post');
                });

               
        
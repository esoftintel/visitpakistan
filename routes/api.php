<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::post('/register', '\App\Http\Controllers\API\test_api@add_user');
// Route::post('/login', '\App\Http\Controllers\API\test_api@login');

/// passport auth_api routes
Route::post('login', 'APIs\authController@login');
Route::post('register', 'APIs\authController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'APIs\authController@details');
    });
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('frontpage','APIs\frontController@pakistan');
    Route::get('users','APIs\frontController@allUsers');
    Route::get('allCategories','APIs\frontController@allCategories');
    Route::get('/ctPosts/{id}', 'APIs\frontController@categoryListings')->name('categoryListings');
    Route::get('/postdetail1/{id}', 'APIs\frontController@postDetails')->name('postDetails'); 
    
    });
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('users','API\auth_api@getAllUsers');
    });
    
    /////////////route for searches
    
        Route::group(['middleware' => 'auth:api'], function(){
        Route::post('search', 'API\search_api@search');
        Route::post('filter','API\search_api@search_category');
        });
        Route::group(['middleware' => 'auth:api'], function(){
        Route::get('categories','API\auth_api@getAllCategories');
        });
        Route::group(['middleware' => 'auth:api'], function(){
        Route::post('category_add','API\auth_api@category_add');
        });

           ////// Routes for post_api controller
           
    Route::group(['middleware' => 'auth:api'], function(){
                Route::get('category_posts/{id}','API\post_api@category_post');
                Route::get('post_details/{id}','API\post_api@post_details');
                Route::get('all_categories_posts','API\post_api@all_categories_post');
                Route::get('categoryPosts/{id}','API\post_api@postsOfCategory');
                Route::post('/like', 'API\post_api@like_post');
                Route::get('/liked_posts', 'API\post_api@liked_posts');
                Route::post('/post_submit', 'API\post_api@post_store');
                Route::get('/image_post/{id}', 'API\post_api@image_post');
                Route::get('/getcategories', 'API\post_api@getcategories');
                Route::get('/getsubcategories/{id}', 'API\post_api@getsubcategories');
                Route::get('/getsubcategory_attributes/{id}', 'API\post_api@getsubcategory_attributes');
                Route::get('/attribute_values/{id}', 'API\post_api@getsubcategory_attributevalues');
                Route::post('/post_submit', 'API\post_api@post_submit');
                });
                
                Route::post('commentadd','API\post_api@commentadd');
                Route::get('getpostrating/{id}','API\post_api@getpostrating');
                Route::get('myposts/{id}','API\post_api@myposts');
                
                Route::group(['middleware' => 'auth:api'], function(){
                    Route::post('name_edit','API\profile_api@name_edit');
                    Route::post('phone_edit','API\profile_api@phone_edit');
                    Route::post('password_edit','API\profile_api@password_edit');
                    Route::post('address_edit','API\profile_api@address_edit');
                    Route::post('about_edit','API\profile_api@about_edit');
                    Route::post('picture_edit','API\profile_api@picture_edit');
                    Route::get('view_profile/{id}','API\profile_api@user_profile');
                    
                    });
                ///////////forgot password api routs
                Route::post('forgotpassword','API\profile_api@forgotpassword');
                Route::get('email/verify/{id}', 'API\verify_api@verify')->name('verificationapi.verify');
                Route::get('email/resend', 'API\verify_api@resend')->name('verificationapi.resend');
                Route::post('video_upload','API\profile_api@video_upload');
                   

               
        
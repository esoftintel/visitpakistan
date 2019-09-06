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
use App\Events\FormSubmitted;
Route::post('/sender', function () {
    $text=request()->message ;
   
    event(new FormSubmitted($text));
});

Route::get('/', 'FrontController@pakistan')->name('visitpakistan');  
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::group(['middleware' => ['auth']], function() {
    // 
    Route::get('/dashboard','admin@dashboard');
    Route::resource('users', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/otherdatabase','MultidatabaseController@fetchDataFromOtherDatabase');

Route::get('/dashboard1','admin@index');

////post oprations
Route::get('/post_details/{id}','admin@post_details');
Route::get('/post_chat/{id}','admin@post_chat');
Route::get('/posts_list','admin@posts');




Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::get('/adDetails', function () {
    return view('user.ad_details');
});
 

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
Route::get('/category_delete/{id}','CategoryController@destroy');
Route::get('/elequent', 'CategoryController@elequent');

Route::resource('subcategory','SubcategoryController'); 
Route:: get('/subcategory_delete/{id}','SubcategoryController@distory');

Route::resource('attribute_value','AttributeValueController');
Route::get('/AttributeValue', 'AttributeValueController@index')->name('AttributeValue');
Route::get('/at_value_delete/{id}','AttributeValueController@destroy');

///////////////Routs for required lists against give id of category, subcagtegory <div class=""></div>
Route::get('sub_categories/{id}','SubcategoryController@sub_categories_of_category');
Route::get('sub_attributes/{id}','AttributeController@sub_attributes');
Route::get('at_values/{id}','AttributeValueController@at_values');
 
///packages table oprations route(s)
Route::resource('packages','PackagController');
Route::get('/package_delete/{id}','PackagController@destroy');
Route::get('/relation','PackagController@relation');


Route::get('/home', 'HomeController@index')->name('home');

///rout for get dynamic value for subcategory
Route::get('/getsubcategory/{id}', 'AttributeController@getcategory');
Route::get('/getattribute/{id}', 'AttributeController@getattribute');
 

//////////////////////////////user side route here /////////////////////////
Route::get('/category_show', 'FrontController@create')->name('category_show');

Route::get('/post_create', 'FrontController@post_create')->name('post_create'); 
Route::get('/post_form/{id}', 'FrontController@post_form')->name('post_form');
Route::post('/post_submit', 'FrontController@post_store')->name('post_submit');
Route::get('/image_post/{id}', 'FrontController@image_post')->name('image_post');
Route::get('/all', 'FrontController@index')->name('all');
//Route::get('/ad_details', 'FrontController@ad_details')->name('ad_details');
Route::get('/ad_details/{id}', 'FrontController@post_detail')->name('ad_details');

Route::get('/user_profile/{id}', 'FrontController@userprofile')->name('user_profile'); 
Route::get('/user_dashboard', 'FrontController@userdashboard')->name('user_dashboard');

Route::get('/category_listing/{id}', 'FrontController@categorylisting')->name('category_listing');  

Route::get('/category_post/{id}', 'FrontController@category_posts')->name('category_post');
Route::get('/post_detail/{id}', 'FrontController@post_detail')->name('post_detail');
Route::get('/pusher', 'ChatController@index')->name('pusher');
Route::get('/search_attribute/{id}', 'FrontController@search_attribute'); 
Route::get('/search_attribute1/{id}', 'FrontController@search_attribute1'); 
Route::get('/search_attribute_sb/{id}', 'FrontController@search_attribute_sb'); 

Route::post('/like', 'LikeController@store')->name('like'); 
Route::post('/create_rating_review', 'RatingController@store')->name('create_rating_review'); ////////
Route::get('/get_rating_review/{post_id}', 'RatingController@index')->name('get_rating_review'); ////////
Route::post('/search', 'FrontController@search')->name('search');
Route::post('/search_category', 'FrontController@search_category')->name('search_category');
Route::post('/user_update', 'UserController@user_update')->name('user_update');


///////////////////////images rout////////////////
Route::post('/images_save', 'MideaController@store')->name('images_save');
Route::post('/images-delete', 'MideaController@destroy'); 
Route::get('/images-show', 'MideaController@index'); 

////////////user Login Signup  

Route::post('/userlogin', 'userLoginController@user_login'); 
Route::get('/userlogout','userLoginController@user_logout');
Route::Post('/usersignup','userLoginController@user_register'); 

Route::match(['get', 'post'], 'ajax-image-upload', 'UserController@ajaxImage');
Route::delete('ajax-remove-image/{filename}', 'UserController@deleteImage');
////////////banner upload

Route::match(['get', 'post'], 'ajax-image-upload_banner', 'UserController@ajaxImage_banner');
Route::delete('ajax-remove-image_banner/{filename}', 'UserController@deleteImage_banner');


Route::get('/chat','RatingController@show_chat');
Route::get('/reciver','RatingController@reciver_chat');

///////////////////new route visitpakistan////////////////////////
Route::get('/visitpakistan', 'FrontController@pakistan')->name('visitpakistan');  
Route::get('/new_post_detail/{id}', 'FrontController@new_post_detail')->name('new_post_detail');

Route::resource('feature','FeatureController');
Route::get('/feature_delete/{id}','FeatureController@destroy');

Route::resource('tag','TagController');
Route::get('/tag_delete/{id}','TagController@destroy');

//Route::resource('comment','CommentController');
Route::post('/comment', 'CommentController@store')->name('comment'); 


Route::get('/new_category_listing/{id}', 'FrontController@new_categorylisting')->name('new_category_listing');  



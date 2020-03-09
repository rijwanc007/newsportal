<?php

// use Symfony\Component\Routing\Route;
// use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', 'Frontend\HomeMainController@index');
Route::get('/archivefilter', 'Frontend\HomeMainController@archiveserch');
Route::get('/singlepost/{id}', 'Frontend\HomeMainController@detaispost');
Route::get('/categorypost/{id}', 'Frontend\HomeMainController@categorywisepost');
Route::get('/category-post/{id}', 'Frontend\HomeMainController@categorynothighlited');
Route::get('/galery/{id}', 'Frontend\HomeMainController@detailgalery');
Route::get('/video-detail/{id}', 'Frontend\HomeMainController@detailvideo');
    


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin pannel controller

 Route::resource('category', 'Admin\CategoryController');
 Route::get('category/catbyid/{id}', 'Admin\CategoryController@edit');
 Route::post('category/update', 'Admin\CategoryController@update');
 
 Route::resource('post', 'Admin\PostController');
 Route::get('post/findsubcat/{id}', 'Admin\PostController@findsubbycat');
 Route::resource('video', 'Admin\VideoController');
 Route::resource('contributor', 'Admin\ContributorController');
 

 Route::resource('subcategory', 'Admin\SubCategoryControllerr');
 Route::get('subcategory/subcatbyid/{id}', 'Admin\SubCategoryControllerr@edit');
 Route::post('subcategory/update', 'Admin\SubCategoryControllerr@update');



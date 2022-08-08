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


/*---------------------------------------------JWT apis are below-----------------------------------------------------*/

Route::post('login', 'AuthController@login');

Route::get('me', 'AuthController@me');

Route::post('register' , 'AuthController@register');

Route::post('delete-user' , 'AuthController@delete');

Route::post('changeinfos' , 'AuthController@changeinfos');

/*------------------------------------------visit apis----------------------------------------------------------------*/

Route::post('store-visit' , 'VisitController@store');

Route::post('delete-visit' , 'VisitController@delete');

Route::get('get-user-visits' , 'VisitController@get_visits');

/*------------------------------------------filter doctors------------------------------------------------------------*/

Route::get('filter-doctors' , 'DoctorController@filterDoctors');

/*--------*/



/*-------------------------------------------favorite apis------------------------------------------------------------*/

Route::post('store-favorite' , 'FavoriteController@store');

Route::post('delete-favorite' , 'FavoriteController@delete');

Route::get('get-user-favorites' , 'FavoriteController@get_user_list');

/*-------------------------------------------comment apis-------------------------------------------------------------*/

Route::post('store-comment' , 'CommentController@store');

Route::post('delete-comment' , 'CommentController@delete');

Route::get('get-comments' , 'CommentController@get_comments');

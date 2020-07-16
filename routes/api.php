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
Route::group(['middleware'=>['checkPassword']], function () {

    route::post('store','PostsController@storeData')->name('store');
});

route::resource('posts','PostsController')->except(['create','edit']); //use this or  use get & post as you like


route::post('login','AuthLoginController@login')->name('login');


route::post('register','AuthLoginController@register')->name('register');
route::post('logout','AuthLoginController@logout')->name('logout');

Route::group(['middleware'=>['checkAdminToken:admin_api']], function () {

    route::post('refresh','AuthLoginController@refresh')->name('refresh');
    
    route::post('resetPassword','AuthLoginController@resetPassword')->name('resetPassword');

});

<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 
|
*/
Route::group(['namespace'=>'Admin'],function () { 
    Route::get('/admin', 'MasterAdminController@index')->name('admin');
});
Route::get('/admin/login', 'Auth\loginAdminController@showLoginAdminForm')->name('admin.login');
Route::post('/admin/login', 'Auth\loginAdminController@login')->name('admin.login');
Route::get('/admin/register', 'Auth\RegisterAdminController@showRegisterForm')->name('admin.register');
Route::post('/admin/register', 'Auth\RegisterAdminController@create')->name('admin.register');
Route::post('admin-logout', 'Auth\loginAdminController@logout')->name('admin-logout');




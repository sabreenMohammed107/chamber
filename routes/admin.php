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
    /*--------------------Chamber-Gallery----------------------*/
Route::resource('/admin/album', 'ChamberGalleryController');
Route::post('/admin/add-AlbumGallery', 'ChamberGalleryController@addGallery')->name('addAlbum');
Route::post('/admin/Edit-AlbumGallery', 'ChamberGalleryController@updateGallery')->name('updateAlbum');
Route::post('/admin/delete-AlbumGallery/{id}', 'ChamberGalleryController@deleteGallery')->name('deleteAlbum');
 /*--------------------Chamber-announce----------------------*/
 Route::resource('/admin/announce', 'AnnounceController');
 Route::post('/admin/add-AnnounceGallery', 'AnnounceController@addGallery')->name('addAnnounce');
 Route::post('/admin/Edit-AnnounceGallery', 'AnnounceController@updateGallery')->name('updateAnnounce');
 Route::post('/admin/delete-AnnounceGallery/{id}', 'AnnounceController@deleteGallery')->name('deleteAnnounce');
 Route::post('/admin/add-AnnounceFile', 'AnnounceController@addFile')->name('addAnnounceFile');
 Route::post('/admin/Edit-AnnounceFile', 'AnnounceController@updateFile')->name('updateAnnounceFile');
 Route::post('/admin/delete-AnnounceFile/{id}', 'AnnounceController@deleteFile')->name('deleteAnnounceFile');
 Route::post('saveRelated', 'AnnounceController@saveRelated')->name('saveRelated');
 Route::DELETE('deleteRelated/{id}', 'AnnounceController@deleteRelated')->name('deleteRelated');
 /*--------------------Chamber-news----------------------*/
 Route::resource('/admin/news', 'NewsController');
 Route::post('/admin/add-NewsGallery', 'NewsController@addGallery')->name('addNews');
 Route::post('/admin/Edit-NewsGallery', 'NewsController@updateGallery')->name('updateNews');
 Route::post('/admin/delete-NewsGallery/{id}', 'NewsController@deleteGallery')->name('deleteNews');
 Route::post('/admin/add-NewsFile', 'NewsController@addFile')->name('addNewsFile');
 Route::post('/admin/Edit-NewsFile', 'NewsController@updateFile')->name('updateNewsFile');
 Route::post('/admin/delete-NewsFile/{id}', 'NewsController@deleteFile')->name('deleteNewsFile');
 Route::post('saveRelatedNews', 'NewsController@saveRelated')->name('saveRelatedNews');
 Route::DELETE('deleteRelatedNews/{id}', 'NewsController@deleteRelated')->name('deleteRelatedNews');
 /*-------------------------partener-------------------*/
Route::resource('/admin/partener', 'PartenerController');
/*-------------------------clients-------------------*/
Route::resource('/admin/client', 'ClientController');

/*-------------------------btsNumber-------------------*/
Route::resource('/admin/number', 'AcademyNumbersController');
/*-------------------------slider-------------------*/

 
});
Route::get('/admin/login', 'Auth\loginAdminController@showLoginAdminForm')->name('admin.login');
Route::post('/admin/login', 'Auth\loginAdminController@login')->name('admin.login');
Route::get('/admin/register', 'Auth\RegisterAdminController@showRegisterForm')->name('admin.register');
Route::post('/admin/register', 'Auth\RegisterAdminController@create')->name('admin.register');
Route::post('admin-logout', 'Auth\loginAdminController@logout')->name('admin-logout');




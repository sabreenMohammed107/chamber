
<?php

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|
| 
|   \Customer
*/
Route::namespace('Customer')->group(function () {
  /*----------------------News---------------------------*/
   Route::get('/news', 'NewsController@index');
   Route::get('/newsDetails/{id}', 'NewsController@newsDetails')->name('newsDetails');
   Route::get('fetch_data', 'NewsController@fetch_data');
   Route::get('fetch_news', 'NewsController@fetch_news');
    /*----------------------Announce---------------------------*/
    Route::get('/announce', 'AnnounceController@index');
    Route::get('/announceDetails/{id}', 'AnnounceController@announceDetails')->name('announceDetails');
    Route::get('fetch_announce', 'AnnounceController@fetch_announce');
    Route::get('fetch_announceDetails', 'AnnounceController@fetch_announceDetails');
// //  Change Lang..
Route::get('changeLang/{lang}', function($lang){

	\Session::put('locale', $lang);

	return redirect()->back();

});

});


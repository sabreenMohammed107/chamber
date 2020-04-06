
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
  /*-----------------------index-------------------*/
  Route::get('/index', 'IndexController@index');
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
    /*-----------------------------Conferance---------------------------------------*/
    Route::get('/conference', 'ConferenceController@index');
    Route::get('fetch_conference', 'ConferenceController@fetch_conference');
    Route::get('/searchForm', 'ConferenceController@searchForm')->name('searchForm');
    Route::get('/conferenceDetails/{id}', 'ConferenceController@conferenceDetails')->name('conferenceDetails');
    Route::get('fetch_conferenceDetails', 'ConferenceController@fetch_conferenceDetails');
    /*--------------------------Contact-------------------------*/
    Route::get('/contact', 'ContactController@index');
    Route::post('/sendMessage', 'ContactController@sendMessage')->name('sendMessage');
     /*--------------------------Album-------------------------*/
     Route::get('/album', 'AlbumController@index');
     Route::get('fetch_album', 'AlbumController@fetch_album');
     /*----------------------------Board-------------------------------*/
     Route::get('/board', 'BoardController@index');
   
// //  Change Lang..
Route::get('changeLang/{lang}', function($lang){

	\Session::put('locale', $lang);

	return redirect()->back();

});

});


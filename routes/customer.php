
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
// //  Change Lang..
Route::get('changeLang/{lang}', function($lang){

	\Session::put('locale', $lang);

	return redirect()->back();

});

});


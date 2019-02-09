<?php



Route::group(['namespace'=>'DeloarBP\Dashboard\Http\Controllers'],function(){

	Route::get('home','DashboardController@index')->name('home.index');

	// Route::get('home',function(){return "HI";});


});

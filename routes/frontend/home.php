<?php

Route::group([
], function() {
	
	Route::get('/home', 'HomeController@index')->name('home');
});
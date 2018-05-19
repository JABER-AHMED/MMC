<?php

Route::group([
	'namespace' => '\deposit'
], function() {
	
	Route::get('/deposit-index', 'DepositController@index')->name('deposit.index');
	Route::post('/deposit/save', 'DepositController@save')->name('deposit.save');
	Route::get('/deposit/list', 'DepositController@find')->name('deposit.find');
	Route::get('/deposit/user/list', 'DepositController@getUser')->name('user.list');
});
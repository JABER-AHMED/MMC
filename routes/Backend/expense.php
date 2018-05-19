<?php

Route::group([
	'namespace' => '\expense'
], function() {
	
	Route::get('/expense-index', 'ExpenseController@index')->name('expense.index');
	Route::post('/expense/save', 'ExpenseController@save')->name('expense.save');
	Route::get('/expense/list', 'ExpenseController@find')->name('expense.find');
	Route::get('/expense/user/list', 'ExpenseController@getUser')->name('user.list');
});
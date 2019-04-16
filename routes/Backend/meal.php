<?php
Route::group([
	'namespace' => '\meal'
], function() {
	
	Route::get('/meal-index', 'MealController@index')->name('meal.index');
	Route::post('/meal/save', 'MealController@save')->name('meal.save');
	Route::get('/meal/list', 'MealController@find')->name('meal.find');
	Route::get('/meal/user/list', 'MealController@getUser')->name('user.list');
	Route::get('/meal/list/{id}', 'MealController@edit')->name('edit.meal');
});

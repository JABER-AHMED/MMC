<?php
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/dashboard-data', 'DashboardController@getData')->name('dashboard.data');
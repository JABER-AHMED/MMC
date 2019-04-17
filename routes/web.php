<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group([
    // 'namespace' => '\frontend',
    'middleware' => 'auth'
], function() {
    include_once 'frontend/home.php';

});

Route::group([
    'namespace' => '\frontend',
    'middleware' => 'auth'
], function() {
    include_once 'frontend/meal.php';

});

Route::group([
    'namespace' => '\backend',
    'middleware' => 'auth'
], function() {
    include_once 'Backend/expense.php';
    include_once 'Backend/deposit.php';
    include_once 'Backend/meal.php';
});
Route::group([
    'middleware' => 'auth'
], function() {
    include_once 'Backend/dashboard.php';
});

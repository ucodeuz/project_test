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

Route::get('/', 'Front\HomeController@index')->name('home');

Route::get('/cp', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/cp', 'Admin\Auth\LoginController@login');

Route::get('/cabinet', 'Admin\Cabinet\HomeController@index')->name('cabinet');
Auth::routes();
Route::group([
    'prefix' => 'cp',
    'namespace' => 'Admin',
    'middleware' => 'auth:admin'
], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('profile', 'Cabinet\HomeController@index')->name('profile');
    Route::put('profile', 'Cabinet\HomeController@update')->name('profile.update');
    Route::resource('employees', 'Employee\EmployeeController');
    Route::get('regions/types', 'Region\RegionController@type')->name('regions.types');
    Route::resource('regions', 'Region\RegionController');
    Route::resource('categories', 'Category\CategoryController');
    Route::post('categories/sort', 'Category\CategoryController@sort')->name('category.sort');
});



<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

//roles route
Route::get('/roles-create', 'RolePageController@index')->name('admin.role.create');
Route::post('/roles-store', 'RolePageController@store')->name('admin.role.store');
Route::get('/roles-list', 'RolePageController@list')->name('admin.role.list');
Route::get('/roles-edit/{id}', 'RolePageController@edit')->name('admin.role.edit');
Route::put('/roles-update/{id}', 'RolePageController@update')->name('admin.role.update');
Route::delete('/roles-delete/{id}', 'RolePageController@delete')->name('admin.role.destroy');

//users

Route::get('/users-create', 'UserPageController@index')->name('admin.user.create');
Route::post('/users-store', 'UserPageController@store')->name('admin.user.store');
Route::get('/users-list', 'UserPageController@list')->name('admin.user.list');
Route::get('/users-edit/{id}', 'UserPageController@edit')->name('admin.user.edit');
Route::put('/users-update/{id}', 'UserPageController@update')->name('admin.user.update');
Route::delete('/users-delete/{id}', 'UserPageController@delete')->name('admin.user.destroy');

/*
Route::get('/dashboard', 'DashboardPageController@index');*/

//colors
Route::get('/colors-create', 'ColorPageController@index')->name('admin.color.create');
Route::post('/colors-store', 'ColorPageController@store')->name('admin.color.store');
Route::get('/colors-list', 'ColorPageController@list')->name('admin.color.list');
Route::get('/colors-edit/{id}', 'ColorPageController@edit')->name('admin.color.edit');
Route::put('/colors-update/{id}', 'ColorPageController@update')->name('admin.color.update');
Route::delete('/colors-delete/{id}', 'ColorPageController@delete')->name('admin.color.destroy');

//sizes
Route::get('/sizes-create', 'SizePageController@index')->name('admin.size.create');
Route::post('/sizes-store', 'SizePageController@store')->name('admin.size.store');
Route::get('/sizes-list', 'SizePageController@list')->name('admin.size.list');
Route::get('/sizes-edit/{id}', 'SizePageController@edit')->name('admin.size.edit');
Route::put('/sizes-update/{id}', 'SizePageController@update')->name('admin.size.update');
Route::delete('/sizes-delete/{id}', 'SizePageController@delete')->name('admin.size.destroy');

//genders
Route::get('/genders-create', 'GenderPageController@index')->name('admin.gender.create');
Route::post('/genders-store', 'GenderPageController@store')->name('admin.gender.store');
Route::get('/genders-list', 'GenderPageController@list')->name('admin.gender.list');
Route::get('/genders-edit/{id}', 'GenderPageController@edit')->name('admin.gender.edit');
Route::put('/genders-update/{id}', 'GenderPageController@update')->name('admin.gender.update');
Route::delete('/genders-delete/{id}', 'GenderPageController@delete')->name('admin.gender.destroy');

//products
Route::get('/products-create', 'ProductPageController@index')->name('admin.product.create');
Route::post('/products-store', 'ProductPageController@store')->name('admin.product.store');
Route::get('/products-list', 'ProductPageController@list')->name('admin.product.list');
Route::get('/products-edit/{id}', 'productPageController@edit')->name('admin.product.edit');
Route::put('/products-update/{id}', 'ProductPageController@update')->name('admin.product.update');
Route::delete('/products-delete/{id}', 'productPageController@delete')->name('admin.product.destroy');



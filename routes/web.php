<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Truck Routes -- cargo
Route::get('/add-truck', 'TruckController@index')->name('add.truck');
Route::post('/insert-truck', 'TruckController@insert')->name('insert.truck');
Route::get('/show-truck', 'TruckController@show')->name('show.truck');
Route::get('/delete-truck/{id}', 'TruckController@destroy')->name('delete.truck');
Route::get('/edit-truck/{id}', 'TruckController@edit')->name('edit.truck');
Route::post('/update-truck/{id}', 'TruckController@update')->name('update.truck');

// Goods Routes -- cargo
Route::get('/add-goods', 'GoodController@index')->name('add.goods');
Route::post('/insert-goods', 'GoodController@insert')->name('insert.goods');
Route::get('/show-goods', 'GoodController@show')->name('show.goods');
Route::get('/delete-goods/{id}', 'GoodController@destroy')->name('delete.goods');
Route::get('/edit-goods/{id}', 'GoodController@edit')->name('edit.goods');
Route::post('/update-goods/{id}', 'GoodController@update')->name('update.goods');

// City Routes -- cargo
Route::get('/add-cities', 'CityController@index')->name('add.cities');
Route::post('/insert-cities', 'CityController@insert')->name('insert.cities');
Route::get('/show-cities', 'CityController@show')->name('show.cities');
Route::get('/delete-cities/{id}', 'CityController@destroy')->name('delete.cities');
Route::get('/edit-cities/{id}', 'CityController@edit')->name('edit.cities');
Route::post('/update-cities/{id}', 'CityController@update')->name('update.cities');

// Price Routes -- cargo
Route::get('/add-prices', 'PriceController@index')->name('add.prices');
Route::post('/insert-prices', 'PriceController@insert')->name('insert.prices');
Route::get('/show-prices', 'PriceController@show')->name('show.prices');
Route::get('/delete-prices/{id}', 'PriceController@destroy')->name('delete.prices');
Route::get('/edit-prices/{id}', 'PriceController@edit')->name('edit.prices');
Route::post('/update-prices/{id}', 'PriceController@update')->name('update.prices');

// Driver Routes -- cargo
Route::get('/show-drivers', 'DriverController@show')->name('show.drivers');
Route::get('/driver-request-details/{id}', 'DriverController@requestdetails')->name('driver.request.details');
Route::post('/driver-request-approve/{id}', 'DriverController@approve')->name('driver.request.approve');
Route::get('/driver-request-decline/{id}', 'DriverController@decline')->name('driver.request.decline');
Route::get('/drivers-list', 'DriverController@list')->name('drivers.list');
Route::get('/drivers-manage/{id}', 'DriverController@manage')->name('drivers.manage');
Route::post('/drivers-change-truck/{id}', 'DriverController@changeTruck')->name('drivers.change.truck');
Route::get('/block-driver/{id}', 'DriverController@block')->name('block.driver');
Route::get('/unblock-driver/{id}', 'DriverController@unblock')->name('unblock.driver');

// Driver

// Profile Routes -- driver
Route::get('/edit-profile', 'DriverController@index')->name('edit.profile');
Route::post('/update-profile', 'DriverController@update')->name('update.profile');

// Change Password -- driver
Route::get('/driver-change-password', 'DriverController@changepassword')->name('driver.change.password');
Route::post('/driver-update-password', 'DriverController@updatepassword')->name('driver.update.password');


// Warehouse
// Profile Routes -- warehouse
Route::get('/edit-warehouse-profile', 'WarehouseController@index')->name('edit.warehouse.profile');
Route::post('/update-warehouse-profile', 'WarehouseController@update')->name('update.warehouse.profile');

// Change Password -- warehouse
Route::get('/warehouse-change-password', 'WarehouseController@changepassword')->name('warehouse.change.password');
Route::post('/warehouse-update-password', 'WarehouseController@updatepassword')->name('warehouse.update.password');

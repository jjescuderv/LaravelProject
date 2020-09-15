<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name("home.index");
Route::get('/home', 'HomeController@index')->name("home.index");
Route::get('/admin/index', 'Admin\AdminHomeController@index')->name("admin.home.index");

Route::get('/admin/car', 'Admin\AdminCarController@showAll')->name("admin.car.index");
Route::get('/admin/car/show/{id}', 'Admin\AdminCarController@show')->name("admin.car.show");

Route::get('/admin/car/order{id}', 'OrderController@show')->name("order");

Route::get('/admin/car/order/cancel', 'OrderController@cancel')->name("order.cancel");


Route::post('/admin/car/order/save', 'OrderController@save')->name("order.save");



Route::get('/home/successbuy', 'HomeController@successBuy')->name("home.successbuy");

Route::get('/admin/car/create', 'Admin\AdminCarController@create')->name("admin.car.create");
Route::get('/admin/car/edit/{id}', 'Admin\AdminCarController@edit')->name("admin.car.edit");

Route::post('/admin/car/save', 'Admin\AdminCarController@save')->name("admin.car.save");

Route::post('/admin/car/update/{id}', 'Admin\AdminCarController@update')->name("admin.car.update");
Route::delete('/admin/car/delete/{id}', 'Admin\AdminCarController@delete')->name("admin.car.delete");

Auth::routes();
/**
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

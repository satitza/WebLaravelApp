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

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/customers', 'CustomerController');
Route::resource('/settings', 'SettingsController');
Route::resource('/rewards_stock', 'RewardController');
Route::resource('/rewards_history', 'RewardHistoryController');


Route::post('/rewards_stock/form', 'RewardController@ShowFormAddReward');
Route::post('/deal_rewards', 'PromotionController@DealRewards');
Route::post('/rewards_stock/delete', 'RewardController@DeleteReward');
Route::post('/rewards_stock/edit', 'RewardController@ShowFormEditReward');
Route::post('/rewards_stock/update', 'RewardController@EditReward');
Route::post('/find_customers', 'CustomerController@FindCustomers');
Route::post('/cal_points', 'CustomerController@CalPoints');
Route::post('/add_points', 'CustomerController@AddPoints');


Route::get('/promotions/{id}/{key}', 'PromotionController@Index');

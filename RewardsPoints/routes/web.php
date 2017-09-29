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



Route::resource('/customers', 'CustomersUsersController');
Route::resource('/settings', 'SettingsController');
Route::resource('/rewardsstock', 'RewardsStockController');
Route::resource('/rewardshistory', 'RewardsHistoryController');


Route::get('/addrewards', 'RewardsStockController@ShowFormAddReward');
Route::get('/editrewards', 'RewardsStockController@ShowFormEditReward');
Route::post('/rewardsstock_add', 'RewardsStockController@AddRewards');
Route::post('/rewardsstock_delete', 'RewardsStockController@DeleteReward');
Route::post('/rewardsstock_edit', 'RewardsStockController@ShowFormEditReward');
Route::post('/rewardsstock_update', 'RewardsStockController@EditReward');

Route::post('/ordertetial', 'RewardsHistoryController@OrderDetial');
Route::post('/rewardshistory/success', 'RewardsHistoryController@OrderSuccess');
Route::post('/rewardshistory/stop', 'RewardsHistoryController@OrderStop');




Route::post('/findcustomers', 'CustomersUsersController@FindCustomers');
Route::post('/calpoints', 'CustomersUsersController@CalPoints');
Route::post('/addpoints', 'CustomersUsersController@AddPoints');


Route::get('/promotions/{key}', 'PromotionsController@index');
Route::post('/dealrewards', 'PromotionsController@DealRewards');

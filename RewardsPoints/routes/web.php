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
Route::resource('/rewardsstock', 'RewardController');
Route::resource('/rewardshistory', 'RewardHistoryController');
Route::resource('/rewardshistory', 'RewardHistoryController');


Route::post('/rewardsstock/form', 'RewardController@ShowFormAddReward');
Route::post('/dealrewards', 'PromotionController@DealRewards');
Route::post('/rewardsstock/delete', 'RewardController@DeleteReward');
Route::post('/rewardsstock/edit', 'RewardController@ShowFormEditReward');
Route::post('/rewardsstock/update', 'RewardController@EditReward');

Route::post('/findcustomers', 'CustomersUsersController@FindCustomers');
Route::post('/calpoints', 'CustomersUsersController@CalPoints');
Route::post('/addpoints', 'CustomersUsersController@AddPoints');


Route::get('/promotions/{key}', 'PromotionController@index');

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

Route::get('test_en', 'ManageKeyController@TestEncrypt');

//------------------------------------------------------------------------------------------------

Route::get('view_score/{encryptedID}/{encryptedKey}', 'ViewScoresController@ViewCustomerSocres');


//--------------------------------------------------------------------------------------------------

Route::get('/', function () {
    return view('login');
});

Route::get('main', function() {
    return view('main_menu');
});

Route::get('check_login', function () {
    echo "test";
});

//------------------------------------------------------------------------------------------------------

Route::get('list_customers/{wc_host}', 'CustomersController@ListAllCustomers');

Route::get('get_customer/{id}', 'CustomersController@GetCustomer');

//-----------------------------------------------------------------------------------------------------

Route::get('list_orders', 'OrdersController@ListAllOrders');

//------------------------------------------------------------------------------------------------------

Route::get('system_status/{wc_host}', 'SystemStatusController@ListAllSystemStatus');

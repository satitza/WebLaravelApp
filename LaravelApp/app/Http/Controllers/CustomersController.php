<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;

class CustomersController extends Controller {

    public function ListAllCustomers() {
        try {
            $woocommerce = new Client(
                    wc_host, consumer_key, consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            //print_r($woocommerce->get('customers'));
            $CustomersArray = $woocommerce->get('customers');
            return view('list_customers')->with('CustomersArray', $CustomersArray);
        } catch (Exception $e) {
            echo "Error cannot list all customers : " . $e;
            unset($e);
        }
        return view('list_customers');
    }

    public function GetCustomer($customer_id) {
        
    }

    public function UpdateCustomer(Array $customer_data) {
        
    }

    public function DeleteCustomer($customer_id) {
        
    }

}

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

    public function ListAllCustomers($wc_host) {
        if ($wc_host = 1) {
            $wc_host = wc_host_perflexgroup;
            $consumer_key = consumer_key_perflexgroup;
            $consumer_secret = consumer_secret_perflexgroup;
        } else if ($wc_host = 2) {
            $wc_host = wc_host_jessiemum;
            $consumer_key = consumer_key_jessiemum;
            $consumer_secret = consumer_secret_jessiemum;
        } else {
            echo "Invalid argument wc_host";
            return;
        }
        try {
            $woocommerce = new Client(
                    $wc_host, $consumer_key, $consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $CustomersArray = $woocommerce->get('customers');
            return view('list_customers')->with('host_name', $wc_host)->with('CustomersArray', $CustomersArray);
        } catch (Exception $e) {
            echo "Error cannot list all customers : " . $e;
            unset($e);
        }
    }

    public function GetCustomer($customer_id) {
        try {
            $woocommerce = new Client(
                    wc_host_perflexgroup, consumer_key_perflexgroup, consumer_secret_perflexgroup, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            //print_r($woocommerce->get('customers/'.$customer_id));
            $CustomersArray = $woocommerce->get('customers/' . $customer_id);
            return view('get_customer')->with('CustomersArray', $CustomersArray);
        } catch (Exception $e) {
            echo "Error cannot get customer information from id : " . $customer_id . "<br>" . $e;
        }
    }

    public function UpdateCustomer(Array $customer_data) {
        
    }

    public function DeleteCustomer($customer_id) {
        
    }

}

<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;

class ViewScoresController extends Controller {

    public function ViewCustomerSocres($customer_id) {
        try {
            $woocommerce = new Client(
                    wc_host, consumer_key, consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $CustomersArray = $woocommerce->get('customers/'.$customer_id);
            return view('view_score')->with('CustomersArray', $CustomersArray);
        } catch (Exception $e) {
            echo "Error : " . $e;
            unset($e);
        }
    }

}

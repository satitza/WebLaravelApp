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

    public function ViewCustomerSocres($encodedID, $encryptedKey) {
        if (md5(wc_view_score_key_perflexgroup) == $encryptedKey) {
            $customers_id = base64_decode($encodedID);
            $wc_hos = wc_host_perflexgroup;
            $consumer_key = consumer_key_perflexgroup;
            $consumer_secret = consumer_secret_perflexgroup;
        } else {
            echo "Invalid key or customer id";
            return;
        }
        try {
            $woocommerce = new Client(
                    $wc_hos, $consumer_key, $consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $CustomersArray = $woocommerce->get('customers/' . $customers_id);
            if ($CustomersArray["total_spent"] > 50) {
                $scores = $CustomersArray["total_spent"] / 50;
            } else {
                $scores = 0.00;
            }
            $Customer = [
                'id' => $CustomersArray["id"],
                'first_name' => $CustomersArray["first_name"],
                'last_name' => $CustomersArray["last_name"],
                'company' => $CustomersArray["shipping"]["company"],
                'address_1' => $CustomersArray["shipping"]["address_1"],
                'address_2' => $CustomersArray["shipping"]["address_2"],
                'city' => $CustomersArray["shipping"]["city"],
                'postcode' => $CustomersArray["shipping"]["postcode"],
                'total_spent' => $CustomersArray["total_spent"],
                'scores' => $scores
            ];
            return view('/promotion/view_score')->with('Customer', $Customer);
        } catch (Exception $e) {
            echo $e;
            return;
        }
    }

}

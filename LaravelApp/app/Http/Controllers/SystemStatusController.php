<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;

header('Content-Type: application/json');

class SystemStatusController extends Controller {

    public function ListAllSystemStatus($wc_host) {

        if ($wc_host == 1) {
            $wc_host_server = wc_host_perflexgroup;
            $consumer_key = consumer_key_perflexgroup;
            $consumer_secret = consumer_secret_perflexgroup;
        } else if ($wc_host == 2) {
            $wc_host_server = wc_host_jessiemum;
            $consumer_key = consumer_key_jessiemum;
            $consumer_secret = consumer_secret_jessiemum;
        } else {
            echo "Invalid Argument";
            return;
        }

        try {

            $woocommerce = new Client(
                    $wc_host_server, $consumer_key, $consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            print_r($woocommerce->get('system_status'));
        } catch (Exception $e) {
            echo "Error cannot get system status from server : " . wc_host_perflexgroup . " " . $e;
            unset($e);
        }
    }

}

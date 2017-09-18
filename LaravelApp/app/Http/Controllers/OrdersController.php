<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Http\Request;
use App\Http\Controllers\Form;
use Automattic\WooCommerce\Client;
header('Content-Type: application/json');

class OrdersController extends Controller {

    public function ListAllOrders() {
        try {
            $woocommerce = new Client(
                    wc_host_perflexgroup, consumer_key_perflexgroup, consumer_secret_perflexgroup, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            //header('Content-Type: application/json');
            //print_r($woocommerce->get('orders'));
            $OrdersArray = $woocommerce->get('orders');
            return view('list_orders')->with('OrdersArray', $OrdersArray);
        } catch (Exception $e) {
            echo "Error cannot list all order : " . $e;
            unset($e);
        }
    }

    public function GetOrder($order_id) {
        
    }

    public function UpdateOrder(Array $order_dara) {
        
    }

    public function DeleteOrder($order_id) {
        
    }

}

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

class LoginController extends Controller {

    public function CheckLogin() {
        //echo $_GET['username'];  
        echo "test";
    }

}

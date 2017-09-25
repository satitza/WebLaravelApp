<?php

namespace App\Http\Controllers;

use App\WCHost;
use App\CustomersUsers;
use Illuminate\Http\Request;
use App\RewardsStock;
use Automattic\WooCommerce\Client;

class PromotionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($encodedID, $encodedKey) {
        $customers_id = base64_decode($encodedID);
        $from_host = base64_decode($encodedKey);
        try {
            $matchThese = ['customers_id' => $customers_id, 'from_host' => $from_host];
            $customers = CustomersUsers::where($matchThese)->get();
            $rewards = RewardsStock::all();
            /*foreach ($customers as $customer) {
                
            }*/
            return view('promotions.index', [
                //'customers_id' => $customer["id"],
                //'first_name' => $customer["first_name"],
                //'last_name' => $customer["last_name"],
                //'points' => $customer["points"],
                'rewards' => $rewards
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RewardsHistoryController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $orders = DB::table('rewards_history')
                    ->select('rewards_history.customers_id', 'first_name', 'last_name', 'reward_name', 'rewards_amount', 'total_points', 'order_date', 'status', 'ip_address')
                    ->join('rewards_stock', 'rewards_history.rewards_code', '=', 'rewards_stock.reward_code')
                    ->join('customers_users', 'rewards_history.customers_id', '=', 'customers_users.customers_id')
                    ->join('orders_status', 'rewards_history.order_status', '=', 'orders_status.id')
                    ->get();
            return view('rewardshistory.index', [
                'orders' => $orders
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function OrderDetial(Request $request) {
        echo $request->customers_id;
        //return view('rewardshistory.detial');
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

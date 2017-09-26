<?php

namespace App\Http\Controllers;

use DB;
use App\WCHost;
use App\CustomersUsers;
use App\RewardsHistory;
use Illuminate\Http\Request;
use App\RewardsStock;
use App\Http\Controllers\PromotionController;
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
            foreach ($customers as $customer) {
                
            }
            return view('promotions.index', [
                        'customers_id' => $customer["customers_id"],
                        'first_name' => $customer["first_name"],
                        'last_name' => $customer["last_name"],
                        'points' => $customer["points"]
                    ])->with('rewards', $rewards);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function DealRewards(Request $request) {
        $total_points = intval($request->reward_points) * intval($request->reward_amount);
        if ($total_points > $request->customers_points) {
            return view('promotions.no_enough');
        } else {
            $sum_points = intval($request->customers_points) - $total_points;
            DB::beginTransaction();
            try {
                $table = New RewardsHistory();
                $table->customers_id = $request->customers_id;
                $table->rewards_id = $request->reward_id;
                $table->rewards_amount = intval($request->reward_amount);
                $table->total_points = intval($total_points);
                $table->order_date = date("Y-m-d");
                $table->order_status = 1;
                $table->ip_address = $request->ip();
                $table->save();

                //update points customer with sum_points
                DB::table('customers_users')
                        ->where('customers_id', $request->customers_id)
                        ->update([
                            'points' => $sum_points
                ]);

                $rewards_stock = RewardsStock::where('id', '=', $request->reward_id)->firstOrFail();
                $sum_amount = intval($rewards_stock->amount) - $request->reward_amount;

                //Update amount in table reward stock
                DB::table('rewards_stock')
                        ->where('id', $request->reward_id)
                        ->update([
                            'amount' => $sum_amount
                ]);

                DB::commit();
                return view('promotions.success');
            } catch (Exception $e) {
                DB::rollback();
                echo $e->getMessage();
            }
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

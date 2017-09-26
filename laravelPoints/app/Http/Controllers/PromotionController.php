<?php

namespace App\Http\Controllers;

use DB;
use App\WCHost;
use App\CustomersUsers;
use App\RewardsHistory;
use Illuminate\Http\Request;
use App\RewardsStock;
use App\Http\Requests\PromotionsRequest;
use App\Http\Controllers\PromotionController;
use Automattic\WooCommerce\Client;

class PromotionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_key) {
        if (CustomersUsers::where('user_key', $user_key)->count() > 0) {
            try {
                $customers = CustomersUsers::where('user_key', $user_key)->get();
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
        } else {
            //return error page
            echo "ไม่พบผู้ใช้งาน";
        }
    }

    public function DealRewards(Request $request) {
        $total_points = intval($request->reward_points) * intval($request->new_amount);
        if ($total_points > $request->customers_points) {
            return view('promotions.no_enough');
        } else if ($request->new_amount > $request->old_amount) {
            echo "ของรางวัลมีไม่เพียงพอสำหรับใช้คะแนนแลก";
        } else {
            $sum_points = intval($request->customers_points) - $total_points;
            DB::beginTransaction();
            try {
                $table = New RewardsHistory();
                $table->customers_id = $request->customers_id;
                $table->rewards_id = $request->reward_id;
                $table->rewards_amount = intval($request->new_amount);
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

                //$rewards_stock = RewardsStock::where('id', '=', $request->reward_id)->firstOrFail();
                $sum_amount = intval($request->old_amount) - intval($request->new_amount);

                //Update amount in table reward stock
                DB::table('rewards_stock')
                        ->where('id', $request->reward_id)
                        ->update([
                            'amount' => $sum_amount
                ]);

                DB::commit();
                //return view('promotions.success');
                return redirect("http://www.perflexgroup.com/my-account");
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

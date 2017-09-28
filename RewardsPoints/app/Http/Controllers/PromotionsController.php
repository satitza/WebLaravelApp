<?php

namespace App\Http\Controllers;

use DB;
use App\CustomersUsers;
use App\RewardsHistory;
use App\RewardsStock;
use Illuminate\Http\Request;
use App\Http\Requests\PromotionsRequest;

class PromotionsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_key) {
        if (CustomersUsers::where('user_key', $user_key)->count() > 0) {
            try {
                $customers = CustomersUsers::where('user_key', $user_key)->get();
                //$rewards = RewardsStock::paginate(5);
                $rewards = RewardsStock::paginate(3);
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

    public function DealRewards(PromotionsRequest $request) {
        if (!RewardsStock::where('reward_code', '=', $request->reward_code)->count() > 0) {
            //return error page
            echo "ไม่พบของรางวัลที่คุณต้องการ";
        } else {
            //check customers points
            $reward_stock = RewardsStock::where('reward_code', '=', $request->reward_code)->firstOrFail();
            $total_points = intval($reward_stock->reward_points) * intval($request->reward_amount);
            if ($total_points > $request->customers_points) {
                echo "คะแนนของคุณไม่เพียงพอสำหรับแลกของรางวัล";
            } else if ($request->reward_amount > $reward_stock->amount) {
                echo "ของรางวัลไม่ไม่เพียงพอ";
            } else {
                DB::beginTransaction();
                try {
                    $table = New RewardsHistory();
                    $table->customers_id = $request->customers_id;
                    $table->rewards_code = $request->reward_code;
                    $table->rewards_amount = intval($request->reward_amount);
                    $table->total_points = intval($total_points);
                    $table->order_date = date("Y-m-d");
                    $table->order_status = 1;
                    $table->ip_address = $request->ip();
                    $table->save();

                    $sum_points = $request->customers_points - $total_points;
                    //update points customer with sum_points
                    DB::table('customers_users')
                            ->where('customers_id', $request->customers_id)
                            ->update([
                                'points' => $sum_points
                    ]);

                    $sum_amount = $reward_stock->amount - intval($request->reward_amount);
                    //Update amount in table reward stock
                    DB::table('rewards_stock')
                            ->where('reward_code', $request->reward_code)
                            ->update([
                                'amount' => $sum_amount
                    ]);

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                    echo $e->getMessage();
                }
                //echo "success";
                $customers = CustomersUsers::where('customers_id', '=', $request->customers_id)->firstOrFail();
                  return redirect()->action(
                  'PromotionsController@index', ['user_key' => $customers->user_key]
                  );
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

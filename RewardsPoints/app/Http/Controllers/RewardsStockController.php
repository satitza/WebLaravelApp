<?php

namespace App\Http\Controllers;

use DB;
use File;
use App\RewardsStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RewardsStockRequest;
use App\Http\Requests\RewardsStockUpdateRequest;

class RewardsStockController extends Controller {

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

            $rewards = RewardsStock::paginate(5);
            return view('rewardsstock.index', [
                'rewards' => $rewards
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function ShowFormAddReward() {
        return view('rewardsstock.addrewards');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
    }

    public function AddRewards(RewardsStockRequest $request) {
        if (RewardsStock::where('reward_code', '=', $request->reward_code)->count() > 0) {
            return view('error.index')->with('error_message', 'มีรหัสของรางวัลนี้อยู่ในฐานข้อมูลแล้ว');
        } else if (Input::hasFile('image')) {
            try {
                $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $destinationPath = public_path('/reward_images');
                $reward_stock = New RewardsStock();
                $reward_stock->reward_code = $request->reward_code;
                $reward_stock->reward_name = $request->reward_name;
                $reward_stock->reward_detial = $request->reward_detial;
                $reward_stock->path_images = $filename;
                $reward_stock->amount = $request->reward_amount;
                $reward_stock->reward_points = $request->reward_points;
                $reward_stock->save();
                $request->file('image')->move($destinationPath, $filename);
                return redirect()->action('RewardsStockController@index');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            return view('error.index')->with('error_message', 'คุณยังไม่ใด้ upload รูปภาพ');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function store(Request $request) {
        
    }

    public function EditReward(RewardsStockUpdateRequest $request) {
        try {
            DB::table('rewards_stock')
                    ->where('id', $request->reward_id)
                    ->update([
                        'reward_name' => $request->reward_name,
                        'reward_detial' => $request->reward_detial,
                        'amount' => $request->reward_amount,
                        'reward_points' => $request->reward_points
            ]);
            return redirect()->action('RewardsStockController@index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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
        try {
            $reward_stock = RewardsStock::find($id);
            return view('rewardsstock.editrewards', [
                'reward_code' => $reward_stock->reward_code,
                'reward_id' => $reward_stock->id,
                'reward_name' => $reward_stock->reward_name,
                'reward_detial' => $reward_stock->reward_detial,
                'amount' => $reward_stock->amount,
                'reward_points' => $reward_stock->reward_points
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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

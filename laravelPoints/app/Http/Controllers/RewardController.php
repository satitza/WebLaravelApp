<?php

namespace App\Http\Controllers;

use DB;
use File;
use Storage;
use App\RewardsStock;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRewardsRequest;
use Illuminate\Support\Facades\Input;

class RewardController extends Controller {

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

            $rewards = RewardsStock::all();
            return view('rewards.index', [
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

    public function ShowFormAddReward() {
        return view('rewards.add_reward');
    }

    public function ShowFormEditReward(Request $request) {
        try {
            $reward_stock = RewardsStock::find($request->reward_id);
            return view('rewards.edit_reward', [
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * */
    public function store(Request $request) {
        if (Input::hasFile('image')) {
            try {
                $this->validate($request, [
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $destinationPath = public_path('/reward_images');
                $reward_stock = New RewardsStock();
                $reward_stock->reward_name = $request->reward_name;
                $reward_stock->reward_detial = $request->reward_detial;
                $reward_stock->path_images = '/reward_images/' . $filename;
                $reward_stock->amount = $request->reward_amount;
                $reward_stock->reward_points = $request->reward_points;
                $reward_stock->save();
                $request->file('image')->move($destinationPath, $filename);
                return redirect()->action('RewardController@index');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo "Images upload not found";
        }
    }

    public function EditReward(Request $request) {
        try {
            DB::table('rewards_stock')
                    ->where('id', $request->reward_id)
                    ->update([
                        'reward_name' => $request->reward_name,
                        'reward_detial' => $request->reward_detial,
                        'amount' => $request->reward_amount,
                        'reward_points' => $request->reward_points
            ]);
            return redirect()->action('RewardController@index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function DeleteReward(Request $request) {
        try {
            $reward_stock = RewardsStock::find($request->reward_id);
            $reward_stock->delete();
            return redirect()->action('RewardController@index');
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

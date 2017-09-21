<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RewardsStock;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if (Input::hasFile('image')) {


            echo "reward_name : " . $request->reward_name . "<br>";
            echo "reward_detial : " . $request->reward_detial . "<br>";
            echo "reward_amount : " . $request->reward_amount . "<br>";
            echo "reward_points : " . $request->reward_points . "<br>";


            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $image = $request->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            echo "images name : " . $input['imagename'] . "<br>";
            //$destinationPath = public_path('/reward_images');
            //$image->move($destinationPath, $input['imagename']);
        } else {
            echo "Images upload not found";
        }
    }

    public function EditReward(Request $request) {
        return view('rewards.edit_reward');
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

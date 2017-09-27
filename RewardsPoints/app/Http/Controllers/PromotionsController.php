<?php

namespace App\Http\Controllers;

use DB;
use App\CustomersUsers;
use App\RewardsHistory;
use App\RewardsStock;
use Illuminate\Http\Request;



class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_key)
    {
        if (CustomersUsers::where('user_key', $user_key)->count() > 0) {
            try {
                $customers = CustomersUsers::where('user_key', $user_key)->get();
                //$rewards = RewardsStock::paginate(5);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

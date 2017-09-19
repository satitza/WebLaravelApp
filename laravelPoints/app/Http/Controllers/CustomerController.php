<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomersUsers;
use App\CustomersPoints;
use App\WCHost;
use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

class CustomerController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Query All From Table Customer User And Return to view
    public function index() {
        $wc_host_item = WCHost::all();
        $customers = CustomersUsers::all();
        //$points = CustomersPoints::all();
        return view('customers.index')->with('wc_host_item', $wc_host_item)->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    //Find Customer Where Host And ID And Chack Customers in databases
    public function FindCustomers(Request $request) {
        $wc_host = $request->get('wc_item');
        $customers_id = $request->name;
        $model = WCHost::where('wc_host', '=', $wc_host)->firstOrFail();
        try {
            $woocommerce = new Client(
                    $model->wc_host, $model->consumer_key, $model->consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $get_customers = $woocommerce->get('customers/' . $customers_id);
            if (CustomersUsers::where('customers_id', '=', $get_customers["id"])->count() > 0 &&
                    CustomersUsers::where('from_host', '=', $wc_host)->count() > 0
            ) {
                return redirect()->action('CustomerController@index');
            } else {
                $table = New CustomersUsers();
                $table->customers_id = $get_customers["id"];
                $table->date_created = $get_customers["date_created"];
                $table->email = $get_customers["email"];
                $table->first_name = $get_customers["first_name"];
                $table->last_name = $get_customers["last_name"];
                $table->role = $get_customers["role"];
                $table->username = $get_customers["username"];
                $table->company = $get_customers["billing"]["company"];
                $table->phone = $get_customers["billing"]["phone"];
                $table->orders_count = $get_customers["orders_count"];
                $table->total_spent = $get_customers["total_spent"];
                $table->from_host = $wc_host;
                $table->save();

                if ($get_customers["total_spent"] < 50) {
                    return redirect()->action('CustomerController@index');
                } else {
                    $points = $get_customers["total_spent"] / 50;
                    $wc_id = WCHost::where('wc_host', '=', $wc_host)->firstOrFail();

                    $table1 = New CustomersPoints();
                    $table1->customers_id = $get_customers["id"];
                    $table1->points = $points;
                    $table1->from_host = $wc_id->id;
                    $table1->save();
                    return redirect()->action('CustomerController@index');
                }
            }
        } catch (HttpClientException $e) {
            echo $e->getMessage();
        }
    }

    public function CalPoints(Request $request) {
        if ($request->total_spent < 50) {
            echo "จำนวนเงินไม่พอที่จะคำนวนเป็นคะแนนใด้";
        } else {
            $points = $request->total_spent / 50;
            $table = New CustomersPoints();
        }
        //echo $request->customers_id."<br>";
        //echo $request->total_spent."<br>";
        //echo $request->from_host;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Insert A New Customers
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

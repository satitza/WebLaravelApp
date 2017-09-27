<?php

namespace App\Http\Controllers;

use App\WCHost;
use App\CustomersUsers;
use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use App\Http\Requests\CustomersUsersRequest;

class CustomersUsersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $wc_host_item = WCHost::all();
            $customers = CustomersUsers::all();
            return view('customers.index', [
                'wc_host_item' => $wc_host_item,
                'customers' => $customers
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

     //Find Customer Where Host And ID And Chack Customers in databases
     public function FindCustomers(CustomersUsersRequest $request) {
        $wc_host = $request->get('wc_item');
        $customers_id = $request->customers_id;
        $wc_key = WCHost::where('wc_host', '=', $wc_host)->firstOrFail();
        try {
            $woocommerce = new Client(
                    $wc_key->wc_host, $wc_key->consumer_key, $wc_key->consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $get_customers = $woocommerce->get('customers/' . $customers_id);
            if ($get_customers["total_spent"] < 50) {
                echo "จำนวนเงินลูกค้ายังไม่สามารถคำนวนเป็นคะแนนใด้";
            } else if (CustomersUsers::where('customers_id', '=', $get_customers["id"])->count() > 0 &&
                    CustomersUsers::where('from_host', '=', $wc_host)->count() > 0
            ) {
                return redirect()->action('CustomersUsersController@index');
            } else {

                $points = $get_customers["total_spent"] / 50;
                $user_key_encrypted = md5($wc_key->wc_host.$customers_id);

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
                $table->points = $points;
                $table->user_key = $user_key_encrypted;
                $table->save();
                return redirect()->action('CustomersUsersController@index');
            }
        } catch (HttpClientException $e) {
            echo $e->getMessage();
        }
    }

    public function CalPoints(Request $request) {
        $wc_key = WCHost::where('wc_host', '=', $request->from_host)->firstOrFail();
        try {
            $woocommerce = new Client(
                    $wc_key->wc_host, $wc_key->consumer_key, $wc_key->consumer_secret, [
                'wp_api' => true,
                'version' => 'wc/v2',
                    ]
            );
            $get_customers = $woocommerce->get('customers/' . $request->customers_id);
            $old_total = $request->total_spent;
            $new_total = intval($get_customers["total_spent"]);
            $settlement = $new_total - $old_total;
            $new_points = intval($settlement / 50);

            return view('customers.calpoints', [
                'customers_id' => $request->customers_id,
                'old_total' => $old_total,
                'old_points' => $request->points,
                'new_orders_count' => $get_customers['orders_count'],
                'new_total' => $new_total,
                'settlement' => $settlement,
                'new_points' => $new_points
            ]);
        } catch (HttpClientException $e) {
            echo $e->getMessage();
        }
    }

    public function AddPoints(Request $request) {
        if (intval($request->settlement) < 50) {
            return redirect()->action('CustomersUsersController@index');
        }
        try {
            $customers = CustomersUsers::where('customers_id', '=', $request->customers_id)->firstOrFail();
            $sum_points = $request->new_points + $customers->points;
            intval($sum_points);
            DB::table('customers_users')
                    ->where('customers_id', $request->customers_id)
                    ->update([
                        'orders_count' => $request->new_orders_count,
                        'total_spent' => $request->new_total,
                        'points' => $sum_points
            ]);
            return redirect()->action('CustomersUsersController@index');
        } catch (Exception $e) {
            echo $e->getMessage();
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

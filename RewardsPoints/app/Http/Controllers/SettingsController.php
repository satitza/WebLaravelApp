<?php

namespace App\Http\Controllers;

use DB;
use App\PointsSettings;
use Illuminate\Http\Request;
use App\Http\Requests\SettingsRequest;

class SettingsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('settings.index');
    }

    public function pointsIndex() {
        try {
            $points = PointsSettings::all();
            foreach ($points as $point) {
                
            }

            return view('settings.pointssettings', [
                'points' => $point,
            ]);
        } catch (Exception $e) {
            
        }
    }

    public function UpdatePoints(SettingsRequest $request) {
        try {
            DB::beginTransaction();
            $table1 = PointsSettings::find(1);
            $table1->points_settings = $request->points_settings;
            $table1->update();
            DB::commit();
            return redirect()->action('SettingsController@pointsIndex');
        } catch (Exception $e) {
            DB::rollBack();
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

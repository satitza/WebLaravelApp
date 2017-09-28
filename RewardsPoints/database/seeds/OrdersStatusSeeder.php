<?php

use Illuminate\Database\Seeder;

class OrdersStatusSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $table1 = New App\OrdersStatus();
        $table1->status = 'New Order';
        $table1->save();
        
        $table1 = New App\OrdersStatus();
        $table1->status = 'On Hold';
        $table1->save();
        
        $table1 = New App\OrdersStatus();
        $table1->status = 'Success';
        $table1->save();
    }

}

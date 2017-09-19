<?php

use Illuminate\Database\Seeder;

class WCHostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table1 = New App\WCHost();
        $table1->wc_host = wc_host_perflexgroup;
        $table1->consumer_key = consumer_key_perflexgroup;
        $table1->consumer_secret = consumer_secret_perflexgroup;
        $table1->save();
        
        $table2 = New App\WCHost();
        $table2->wc_host = wc_host_jessiemum;
        $table2->consumer_key = consumer_key_jessiemum;
        $table2->consumer_secret = consumer_secret_jessiemum;
        $table2->save();
    }
}

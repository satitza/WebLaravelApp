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
        $table1->wc_host = 'http://www.perflexgroup.com';
        $table1->consumer_key = 'ck_66ee6443b4647e81c54581f252469881beb36d67';
        $table1->consumer_secret = 'cs_e519f484e2c109b04b5ae1df48d7495f3bd6c508';
        $table1->save();
        
        $table2 = New App\WCHost();
        $table2->wc_host = 'http://www.jessiemum.com';
        $table2->consumer_key = 'ck_dd17466b64ab9f15371962a1c04e27c852635c39';
        $table2->consumer_secret = 'cs_117e41d3a8e34097a3314f335cbcf60edfc27270';
        $table2->save();
    }
}

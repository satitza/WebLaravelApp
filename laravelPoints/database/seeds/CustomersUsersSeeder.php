<?php

use Illuminate\Database\Seeder;

class CustomersUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table1 = New App\CustomersUsers();
        $table1->customers_id = '14';
        $table1->date_created = '2017-09-08T12:18:56';
        $table1->email = 'st_satitza@hotmail.com';
        $table1->first_name = 'สาธิค';
        $table1->last_name = 'พรเทพานนท์';
        $table1->role = 'administrator';
        $table1->username = 'anonymous';
        $table1->company = 'Anonymous';
        $table1->phone = '063-953-8505';
        $table1->orders_count = '2';
        $table1->total_spent = '900.00';
        $table1->from_host = 'http://www.perflexgroup.com';
        $table1->save();
    }
}

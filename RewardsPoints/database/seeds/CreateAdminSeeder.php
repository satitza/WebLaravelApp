<?php

use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $table1 = New App\User();
        $table1->name = 'Administrator';
        $table1->email = 'admin@founder.com';
        $table1->password = bcrypt('dr823c1HEE');
        $table1->save();
    }

}

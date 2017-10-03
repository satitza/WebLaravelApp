<?php

use Illuminate\Database\Seeder;

class PointsSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table1 = New App\PointsSettings();
        $table1->points_settings = 50;
        $table1->save();
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reward_code')->nullable();
            $table->string('reward_name')->nullable();
            $table->string('reward_detial')->nullable();
            $table->string('path_images')->nullable();
            $table->integer('amount')->unsigned();
            $table->integer('reward_points')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rewards_stock');
    }
}

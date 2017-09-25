<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customers_id')->unsigned();
            $table->integer('rewards_id')->unsigned();
            $table->foreign('rewards_id')->references('id')->on('rewards_stock');
            $table->integer('rewards_amount')->unsigned();
            $table->integer('total_points')->unsigned();
            $table->date('order_date')->nullable();
            $table->integer('order_status')->unsigned();
            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('rewards_history');
    }
}

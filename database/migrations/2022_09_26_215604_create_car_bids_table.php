<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_bids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_id')->nullable()->unsigned();
            $table->bigInteger('bid_user_id')->nullable()->unsigned();
            $table->string('car_min_price');
            $table->string('bidding_price');
            $table->string('slug');
            $table->string('bid_status');
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
        Schema::dropIfExists('car_bids');
    }
};

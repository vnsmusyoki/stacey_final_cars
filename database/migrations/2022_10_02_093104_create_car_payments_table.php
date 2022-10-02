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
        Schema::create('car_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_id')->nullable()->unsigned();
            $table->bigInteger('bid_user_id')->nullable()->unsigned();
            $table->bigInteger('car_owner_id')->nullable()->unsigned();
            $table->bigInteger('bid_id')->nullable()->unsigned();
            $table->string('total_price');
            $table->string('admin_amount');
            $table->string('owner_amount');
            $table->string('transaction_code')->nullable();
            $table->string('payment_status');
            $table->string('slug');
            $table->foreign('bid_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bid_id')->references('id')->on('car_bids')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_owner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('car_payments');
    }
};

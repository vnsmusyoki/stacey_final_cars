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
        Schema::create('car_photos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_owner_id')->nullable()->unsigned();
            $table->bigInteger('car_id')->nullable()->unsigned();
            $table->string('image_name');
            $table->string('slug');
            $table->string('file_size');
            $table->foreign('car_owner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('car_photos');
    }
};

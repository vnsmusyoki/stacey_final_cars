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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_make_id')->nullable()->unsigned();
            $table->bigInteger('car_make_model_id')->nullable()->unsigned();
            $table->bigInteger('car_owner_id')->nullable()->unsigned();
            $table->string('car_year');
            $table->string('engine_cc');
            $table->string('reg_number');
            $table->string('car_image');
            $table->longText('car_description');
            $table->string('slug');
            $table->foreign('car_make_id')->references('id')->on('car_makes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('car_make_model_id')->references('id')->on('car_make_modeles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('cars');
    }
};

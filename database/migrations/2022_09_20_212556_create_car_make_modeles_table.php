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
        Schema::create('car_make_modeles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_make_id')->nullable()->unsigned();
            $table->string('car_make_model_name');
            $table->string('slug');
            $table->foreign('car_make_id')->references('id')->on('car_makes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('car_make_modeles');
    }
};

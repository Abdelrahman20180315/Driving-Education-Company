<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('national_image')->nullable();
            $table->string('national_image_back')->nullable();
            $table->string('Car_form_image')->nullable();
            $table->string('car_insurance_image')->nullable();
            $table->string('driving_license_image')->nullable();
            $table->string('city')->nullable();
            $table->string('station')->nullable();
            $table->string('status')->nullable();
            $table->string('payway')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('trainers');
    }
}

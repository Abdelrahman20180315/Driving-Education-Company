<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->nullable();
            $table->string("trainer_id")->nullable();
            $table->string("user_name")->nullable();
            $table->string("trainer_name")->nullable();
            $table->string("user_phone")->nullable();
            $table->string("trainer_phone")->nullable();
            $table->string("user_email")->nullable();
            $table->string("trainer_email")->nullable();
            $table->string("station")->nullable();
            $table->string("city")->nullable();
            $table->string("payway")->nullable();
            $table->string("course_hours")->nullable();
            $table->string("trainer_status")->nullable();
            $table->string("bill")->nullable();
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
        Schema::dropIfExists('books');
    }
}

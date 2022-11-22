<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHollandUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holland_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('holland_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


             $table->foreign('user_id')->references('id')->on('users');
              $table->foreign('holland_id')->references('id')->on('hollands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holland_user');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $userTable = config('usersTable');

        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('round_id')->unsigned();
//            Foreign key machine broke

            $table->foreign('round_id')->references('id')->on('users');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('rounds');
//
//            Testing code, remove later if unused
//            $table->bigInteger('user_id')->nullable()->unsigned();
//            $table->foreign('user_id', 'scores_users')->references('id')->on('users');

//            Score per round, for each user.
            $table->smallInteger('score')->unsigned();
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
        Schema::dropIfExists('scores');
    }
}

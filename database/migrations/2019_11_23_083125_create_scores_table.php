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

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id');

            $table->unsignedBigInteger('round_id');
            $table->foreign('round_id')->on('rounds')->references('id');

            $table->unsignedBigInteger('game_table_id');
            $table->foreign('game_table_id')->on('game_tables')->references('id');

//            Score per round, for each user.
            $table->unsignedSmallInteger('amount');
//            Player's weight, based on score.
            $table->decimal('weight', 10, 6)->unsigned()->default(0);
            $table->boolean('validated')->nullable();
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

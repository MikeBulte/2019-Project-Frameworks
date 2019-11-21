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
            $table->foreign('round_id')->references('id')->on('rounds');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('game_table_id')->unsigned();
            $table->foreign('game_table_id')->references('id')->on('game_tables');

//            Score per round, for each user.
            $table->smallInteger('score')->unsigned();
//            Player's weight, based on score.
            $table->decimal('weight', 10, 6)->unsigned()->default(0);
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

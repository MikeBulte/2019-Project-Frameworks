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

            $table->bigInteger('round_user_id')->unsigned();
            $table->foreign('round_user_id')->references('id')
                ->on('round_user')
                ->onUpdate('cascade')
                ->onDelete('cascade');

//            Score per round, for each user.
            $table->smallInteger('amount')->unsigned();
//            Player's weight, based on score. TODO: Create weight system
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

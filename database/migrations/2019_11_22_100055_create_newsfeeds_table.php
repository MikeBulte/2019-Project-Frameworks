<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsfeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsfeeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            // TODO: Nullable is tijdelijk aan het einde weghalen
            $table->bigInteger('user_id')->unsigned()->nullable();;
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title', 120);
            $table->text('article');
            $table->binary('image')->nullable();
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
        Schema::dropIfExists('newsfeeds');
    }
}

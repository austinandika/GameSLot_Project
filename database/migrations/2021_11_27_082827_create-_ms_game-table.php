<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_games', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('image', 255);
            $table->string('description', 255);
            $table->integer('price', false, true);
            $table->integer('pegi_rating', false, true);
            $table->bigInteger('game_genre_id', false, true);
            $table->timestamps();

            $table->foreign('game_genre_id')->references('id')->on('ms_game_genres')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

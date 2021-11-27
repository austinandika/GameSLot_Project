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
        Schema::create('MsGame', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 50);
            $table->string('Image', 255);
            $table->string('Description', 255);
            $table->integer('Price', false, true);
            $table->integer('PEGIRating', false,true);
            $table->bigInteger('GameGenre_Id',false,true);
            $table->timestamps();

            $table->foreign('GameGenre_Id')->references('id')->on('MsGameGenre');
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

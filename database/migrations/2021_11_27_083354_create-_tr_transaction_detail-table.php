<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrTransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_transaction_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transaction_id', false, true);
            $table->bigInteger('game_id', false, true);

            $table->string('game_title', 50);
            $table->integer('game_price', false, true);
            $table->integer('quantity', false, true);
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('tr_transactions');
            $table->foreign('game_id')->references('id')->on('ms_games');
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

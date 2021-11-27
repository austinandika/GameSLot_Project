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
        Schema::create('MsTransactionDetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Transaction_Id',false,true);
            $table->bigInteger('Game_Id',false, true);

            $table->string('GameTitle', 50);
            $table->integer('GamePrice', false, true);
            $table->integer('Quantity', false, true);
            $table->timestamps();

            $table->unique('Transaction_Id');
            $table->foreign('Transaction_Id')->references('id')->on('TrTransaction');
            $table->foreign('Game_Id')->references('id')->on('MsGame');
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

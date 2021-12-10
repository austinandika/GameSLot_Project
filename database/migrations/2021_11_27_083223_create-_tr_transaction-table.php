<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->bigInteger('user_id', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('ms_users');
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

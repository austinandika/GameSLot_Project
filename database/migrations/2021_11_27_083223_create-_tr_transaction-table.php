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
        Schema::create('TrTransaction', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->bigInteger('User_Id',false, true);
            $table->timestamps();

            $table->foreign('User_Id')->references('id')->on('MsUser');
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

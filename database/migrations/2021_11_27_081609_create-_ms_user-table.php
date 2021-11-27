<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MsUser', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 50);
            $table->string('Photo', 255);
            $table->string('Email', 50);
            $table->string('Password', 255);
            $table->string('Gender', 20);
            $table->date('DateOfBirth');
            $table->bigInteger('Role_Id',false,true);
            $table->timestamps();

            $table->foreign('Role_Id')->references('id')->on('MsRole');
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

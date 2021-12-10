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
        Schema::create('ms_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('photo', 255)->nullable();
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('gender', 20);
            $table->date('date_of_birth');
            $table->bigInteger('role_id', false, true);
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('ms_roles');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations. Creating tables in SQL
    */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID')->unsigned();
            $table->string('os');
            $table->string('issue');
            $table->text('description');
            $table->string('status');
            $table->string('priority');
            $table->string('escalationLevel');
            $table->timestamp('createdOn');
            $table->timestamps();
        });

        //Getting userID from Users Table
        Schema::table('tickets', function ($table) {
            $table->foreign('userID')
                ->references('id')
                ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

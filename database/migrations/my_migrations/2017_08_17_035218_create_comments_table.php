<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations. Create tabel to SQL
    */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticketID')->unsigned();
            $table->text('description');
            $table->timestamp('createdOn');
            $table->timestamps();
        });

        //Getting TicketID from Tickets Table
        Schema::table('comments', function ($table) {
            $table->foreign('ticketID')->references('id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations. Drop Tables
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

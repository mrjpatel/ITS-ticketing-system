<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticketID');
            $table->integer('userID')->unsigned();
            $table->string('os');
            $table->string('issue');
            $table->text('description');
            $table->string('status');
            $table->timestamp('createdOn');
            $table->timestamps();
        });

        Schema::table('tickets', function ($table) {
            $table->foreign('userID')
                ->references('userID')
                ->on('users')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

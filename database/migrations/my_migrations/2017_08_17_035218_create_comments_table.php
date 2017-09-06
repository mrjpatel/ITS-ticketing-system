<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('commentID');
            $table->integer('ticketID')->unsigned();
            $table->integer('sentBy')->unsigned();
            $table->text('description');
            $table->timestamp('createdOn');
            $table->timestamps();
        });

        Schema::table('comments', function ($table) {
            $table->foreign('ticketID')->references('id')->on('tickets');
            $table->foreign('sentBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

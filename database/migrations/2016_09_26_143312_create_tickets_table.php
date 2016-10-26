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
            $table->increments('ticket_id');
            $table->string('title');
            $table->integer('organization_id');
            $table->integer('contact_id');
            $table->string('priority');
            $table->string('status');
            $table->string('severity');
            $table->string('ticket_num');
            $table->string('description');
            $table->dateTime('create_time');
            $table->dateTime('modified_time');
            $table->string('assign_to');
            $table->string('update');
            $table->timestamps();
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

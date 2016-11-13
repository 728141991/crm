<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity_type');
            $table->string('subject');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->string('send_notification');
          //  $table->string('activity_type');
            $table->string('location');
            $table->string('priority');
            $table->integer('contact_id');
            $table->integer('related_to_id');
            $table->string('related_to_type');
            $table->string('description');
            $table->dateTime('created_time');
            $table->dateTime('modified_time');
            $table->string('update');
            $table->string('assign_to');
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
        Schema::drop('activities');
    }
}

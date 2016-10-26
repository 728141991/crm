<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('lead_id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->string('primary_phone');
            $table->string('website');
            $table->string('primary_email')->unique();
            $table->string('assign_to');
            $table->string('update');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}

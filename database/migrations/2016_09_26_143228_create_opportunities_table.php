<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('opportunity_id');
=======
            $table->increments('id');
>>>>>>> panshan
            $table->timestamps();
            $table->string('opportunity_name');
            //用别的id怎么搞
            $table->integer('organization_id');
            $table->integer('contact_id');
            $table->integer('amount');
            $table->string('expected_close_data');
            $table->string('sales_stage');
            $table->dateTime('create_time');
            $table->dateTime('modified_time');
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
        Schema::dropIfExists('opportunities');
    }
}

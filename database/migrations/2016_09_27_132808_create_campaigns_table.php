<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('campaign_status');
            $table->string('campaign_name');
            $table->dateTime('create_time');
            $table->dateTime('modified_time');
            $table->string('target_audience');
            $table->string('expected_close_data');
            $table->integer('product_id');
            $table->integer('num_sent');
            $table->double('budget_cost');
            $table->double('actual_cost');
            $table->string('expected_response');
            $table->string('expected_revenue');
            $table->string('expected_roi');
            $table->string('actual_roi');
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
        Schema::dropIfExists('campaigns');
    }
}

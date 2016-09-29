<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
//        if (Schema::hasTable('campaign')) {
//            Schema::drop('campaign');
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campaign_name');
            //这里最好也能做成enum
            $table->string('campaign_type');
            $table->enum('campaign_status',['on', 'off']);
            $table->dateTime('created_time');
            $table->date('modified');
            $table->string('target_audience');
            $table->double('budget_cost');
            $table->double('actual_cost');
            $table->timestamps();
        });
//        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('campaigns');
    }
}

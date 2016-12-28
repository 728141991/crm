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
            $table->string('campaign_name');
            $table->string('type');
            //状态
            $table->string('status');
            //预算
            $table->double('budget');
            //价值
            $table->integer('value');
            //期待汇报
            $table->string('expected_revenue');
            //预计结束日期
            $table->string('expected_close_data');
            //负责人
            $table->string('assign_to');
            //与其相关的产品id，之后补充上去
            $table->integer('product_id');

            $table->dateTime('create_time');
            $table->dateTime('modified_time');
            $table->string('target_audience');
            $table->integer('num_sent');
            $table->double('actual_cost');
            $table->string('expected_roi');
            $table->string('actual_roi');
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

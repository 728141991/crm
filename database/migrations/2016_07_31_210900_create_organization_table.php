<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organization_name');
            //这里最好也能做成enum
            $table->string('city');
            $table->string('website');
            $table->string('phone');
            $table->timestamps();
            //$table->integer('crm_id')->unsigned();
            //这里设置了外键来进行测试
            //$table->foreign('crm_id')->reference('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('organizations');
    }
}

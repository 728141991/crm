<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            //这里最好也能做成enum
            $table->string('last_name');
            $table->string('title');
            //这边还没有做添加
            $table->integer('organization_id');
            $table->string('email');
            $table->string('office_phone');
            $table->timestamps();
            //这里设置了外键来进行测试
            //$table->foreign('organization_id')->references('id')->on('organizations');
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
        Schema::drop('contacts');
    }
}

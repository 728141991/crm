<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productId');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_description');
            $table->string('part_number');
            $table->double('unit_price');
            $table->double('commission_rate');
            $table->double('qty_per_unit');
            $table->double('weight');
            $table->date('sales_start_date');
            $table->date('sales_end_date');

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
        Schema::drop('products');
    }
}

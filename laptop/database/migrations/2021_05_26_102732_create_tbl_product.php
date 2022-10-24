<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('product_name');
            $table->integer('price');
            $table->integer('discount_percentage');
            $table->integer('sale_price');
            $table->string('product_image');
            $table->string('cpu');
            $table->string('ram');
            $table->string('Hard Drive');
            $table->string('screen');
            $table->string('Graphics card');
            $table->string('size');
            $table->integer('inventory_qty');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->smallInteger('featured');
            $table->string('description');
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
        Schema::dropIfExists('tbl_product');
    }
}

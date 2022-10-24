<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('mobile');
            $table->string('email');
            $table->string('ward_id');
            $table->string('login_by');
            $table->string('shipping_name');
            $table->string('housenumber_street');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}

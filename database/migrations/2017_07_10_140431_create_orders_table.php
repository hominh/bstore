<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('customer_id');
            $table->integer('employee_id');
            $table->dateTime('orderdate');
            $table->dateTime('requiredate');
            $table->dateTime('shippeddate');
            $table->integer('shipvia');
            $table->double('freight');
            $table->string('shipname');
            $table->string('shipaddress');
            $table->string('shipcity');
            $table->string('shipregion');
            $table->string('shippostalcode');
            $table->string('shipcountry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}

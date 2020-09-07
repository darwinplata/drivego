<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppDeliveryStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_delivery_stores', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('bln_status');
            $table->timestamps();
            $table->string('str_name', 100); 
            $table->integer('cod_county');
            $table->integer('cod_city');
            $table->string('str_address', 100);
            $table->integer('num_zipcode');
            $table->string('str_geolocation',100);
            $table->string('str_phone',100);
            $table->string('str_contact_name',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_delivery_stores');
    }
}

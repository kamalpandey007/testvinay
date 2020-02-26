<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->biginteger('country_id')->unsigned()->default(1);
            $table->biginteger('state_id')->unsigned();
            $table->biginteger('city_id')->unsigned();
            $table->biginteger('locality_id')->unsigned();
            $table->biginteger('pincode')->nullable();
            $table->biginteger('user_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('locality_id')->references('id')->on('localities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}

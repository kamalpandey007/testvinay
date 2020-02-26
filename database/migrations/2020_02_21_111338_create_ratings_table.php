<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('surl');
            $table->text('description');
            $table->float('rating',2,1);
            $table->biginteger('rating_user_id')->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('category_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->foreign('rating_user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}

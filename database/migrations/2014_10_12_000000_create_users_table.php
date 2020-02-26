<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('profile_image')->nullable();
            $table->integer('working_exprience')->nullable();
            $table->string('duration')->nullable();
            $table->biginteger('employee_type')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

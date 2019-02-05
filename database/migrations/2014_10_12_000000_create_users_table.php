<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();            
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->text('sex')->nullable();
            $table->date('birthday')->nullable();
            //$table->tinyInteger('role_id')->unsigned();
            $table->tinyInteger('role_id')->nullable();
            $table->string('about_me')->nullable();
            $table->string('privacy_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('steam_id')->nullable();
            $table->softDeletes();
            $table->rememberToken()->nullable();
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

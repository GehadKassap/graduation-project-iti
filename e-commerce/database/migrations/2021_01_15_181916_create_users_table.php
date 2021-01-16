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
            $table->id();
            $table->string('fullname' , 100);
            $table->string('email' , 100)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password' , 100)->nullable();
            $table->string('address' , 100)->nullable();
            $table->string('acess_token' , 100)->nullable();
            $table->enum('role',['admin','user' ])->default('user');
            $table->rememberToken()->nullable();
            $table->timestamps();

            ###################################

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

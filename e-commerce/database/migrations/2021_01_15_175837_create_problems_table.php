<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) { 
            $table->id();
            $table->string('name', 500);
            $table->string('subject', 500)->nullable();
            $table->string('email', 500);
            $table->string('phone', 500)->nullable();
            $table->string('message', 500);
            $table->enum('state', ['solved', 'not solved'])->default('not solved');
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
        Schema::dropIfExists('problems');
    }
}
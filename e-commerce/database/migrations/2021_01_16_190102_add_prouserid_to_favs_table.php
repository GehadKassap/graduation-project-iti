<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProuseridToFavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favs', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('user_id');
     $table->unsignedBigInteger('pro_id');
   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
   $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favs', function (Blueprint $table) {
            //
        });
    }
}

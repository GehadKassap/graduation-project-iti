<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->float('sub_total'); //quantity*its price
            $table->float('total'); // add of sub totals
            $table->integer('quantity'); //number of products
            $table->enum('state',['deliver' , 'cancel'])->default('deliver');//deliver , cancel ,fltare2
             $table->unsignedBigInteger('user_id');
             $table->float('payment');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            // $table->unsignedBigInteger('pro_id');
            // $table->foreign('pro_id')->references('id')->on('products')->onDelete('SET NULL');

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
        Schema::dropIfExists('orders');
    }
}

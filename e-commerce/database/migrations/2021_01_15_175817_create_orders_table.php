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
            $table->enum('state',['deliver' , 'cancel','inprogress'])->default('inprogress');//deliver , cancel ,fltare2
            $table->integer('cancel')->default('0');
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

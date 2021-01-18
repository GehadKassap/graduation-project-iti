<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->longText('description', 500)->nullable();
            $table->float('price');
            $table->float('discount')->nullabale()->default(0);
            $table->enum('colors', ['red', 'white', 'green', 'babyblue', 'blue']);
            $table->enum('sizes', ['xl', 'xxl', 'large', 'small', 'medium']);
            $table->integer('quantity');

            $table->timestamps();
        });
        ###########################################################
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
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
            $table->string('name' , 100);
            $table->longText('description' , 500)->nullable();
            $table->float('price');
            $table->float('discount')->nullabale();
             $table->enum('colors',['red','white' ,'green','babyblue' , 'blue'])->default('user');
             $table->enum('sizes',['xl','xxl' ,'large','small' ,'xxl' ,'medium'])->default('user');
            $table->integer('quantity');
            #category table
           # $table->unsignedBigInteger('cat_id');
           # $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
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

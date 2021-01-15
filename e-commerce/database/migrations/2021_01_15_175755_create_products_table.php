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
            $table->string('name');
            $table->text('summary');
            $table->longText('description')->nullable();
            $table->text('photo');
            $table->float('price');
            $table->float('discount')->nullabale();
            $table->unsignedBigInteger('quantity');
            #category table
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->timestamps();
            ###################################


            $table->integer('stock')->default(1);
            #$table->string('size')->default('M')->nullable();
            $table->enum('condition',['default','new','hot'])->default('default');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->boolean('is_featured')->deault(false);
            $table->unsignedBigInteger('child_cat_id')->nullable();
            #$table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('SET NULL');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
             $table->integer('category_id');
             $table->integer('subcategory_id');
             $table->integer('brand_id');
             $table->integer('color_id');
             $table->integer('size_id');
             $table->integer('unit_id');
             $table->string('product_code');
             $table->string('product_name');
             $table->float('price');
             $table->string('description');
             $table->string('product_image');
             $table->integer('status');
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
        Schema::dropIfExists('products');
    }
};

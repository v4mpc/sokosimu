<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('featuredImage1')->nullable();
            $table->string('featuredImage2')->nullable();
            $table->string('featuredImage3')->nullable();
            $table->string('featuredImage4')->nullable();
            $table->string('featuredImage5')->nullable();
            
            
            
            
            
            $table->timestamps();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('customer_id')->nullable()->unsigned();
        });

        Schema::table('products', function (Blueprint $table) {
          $table->foreign('category_id')->references('id')->on('categories');
          $table->foreign('customer_id')->references('id')->on('customers');
          
          
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
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_d_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('quantity');//cantidades em numeros decimales 
            $table->integer('discount')->default(0);//descuento en %
            $table->string('status');//active,pending,approved,cancelled,finished

            //cart_id(FK) header 
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->foreign('cart_id')->references('id')->on('carts');
            
            //products_id(FK) products
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
           
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
        Schema::dropIfExists('cart_d_s');
    }
}

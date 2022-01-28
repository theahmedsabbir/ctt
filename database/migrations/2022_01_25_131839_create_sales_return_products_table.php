<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesReturnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_return_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sales_return_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->double('selling_price', 10,2);
            $table->double('total_without_discount', 10,2);
            $table->double('per_product_discount', 10,2);
            $table->double('discount', 10,2);
            $table->double('total', 10,2);
            $table->timestamps();

            $table->foreign('sales_return_id')->references('id')->on('sales_returns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_return_products');
    }
}

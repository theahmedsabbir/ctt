<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierLpoProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_lpo_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_lpo_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->double('unit_price', 10, 2)->unsigned();
            $table->double('total_price', 10, 2)->unsigned();
            $table->timestamps();

            
            $table->foreign('supplier_lpo_id')->references('id')->on('supplier_lpos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_lpo_products');
    }
}

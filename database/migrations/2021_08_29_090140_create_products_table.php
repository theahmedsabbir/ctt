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
            $table->string('sku');
            $table->string('slug');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('width');
            $table->string('length');
            $table->string('rim_size');
            $table->string('rim_category');
            $table->bigInteger('special_offer_id')->unsigned()->nullable();
            $table->bigInteger('pattern_id')->unsigned()->nullable();
            $table->string('run_flat_tyre')->nullable();
            $table->string('production_year');
            $table->string('load_index');
            $table->string('speed_index');
            $table->string('style')->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('quantity')->default(0);
            $table->double('unit_price', 10,2);
            $table->double('selling_price', 10,2)->nullable();
            $table->double('tax', 10,2)->default(0);
            $table->boolean('is_recommended')->default(1)->comment('0 => not(default), 1 => yes');
            $table->boolean('is_tested')->default(1)->comment('0 => not(default), 1 => yes');
            $table->boolean('is_active')->default(1)->comment('0 => not(default), 1 => yes');
            $table->bigInteger('promo_code_id')->nullable();
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
}

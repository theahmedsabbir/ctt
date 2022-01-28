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
            $table->bigInteger('invoice_no')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->double('tax', 10,2)->unsigned();
            $table->double('sub_total', 10,2)->unsigned()->default(0);
            $table->double('fixing_charge', 10,2)->unsigned()->default(0)->nullable();
            $table->double('mobile_van_charge', 10,2)->unsigned()->default(0);
            $table->string('promo_code_id')->nullable();
            $table->text('brand_discounts')->nullable();
            $table->double('promo_code_discount', 10,2)->unsigned()->default(0);
            $table->double('total', 10,2)->unsigned();
            $table->string('installer_type')->comment('regular(default) , mobile_van');
            $table->bigInteger('installer_id')->nullable()->unsigned();
            $table->string('date')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('address')->nullable();
            $table->string('plate_no')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('payment_method')->nullable();
            $table->boolean('is_paid')->comment('Default => 0 (O => unpaid, 1 => paid)')->default(0);
            $table->string('status')->comment('pending_for_approval, approved, processing, complete')->default('pending_for_approval');
            $table->boolean('is_approved')->comment('0 => not ( default ), 1 => yes')->default(0);
            $table->integer('installer_rating')->nullable();
            $table->string('installer_review_title')->nullable();
            $table->text('installer_review')->nullable();
            $table->text('updated_by')->nullable();
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

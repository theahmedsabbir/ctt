<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallerLposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installer_lpos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('lpo_no')->unique();
            $table->string('file')->nullable();
            $table->string('invoice')->nullable();
            $table->double('total', 10,2 )->nullable();
            $table->double('paid', 10,2 )->default(0);
            $table->boolean('is_paid')->default(0)->comment('0 => no(default), 1 => yes');
            $table->string('return_no')->nullable();
            $table->double('return_amount', 10,2 )->nullable();
            $table->timestamp('return_date')->nullable();
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
        Schema::dropIfExists('installer_lpos');
    }
}

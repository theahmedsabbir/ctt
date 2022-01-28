<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('owner_number')->nullable();
            $table->string('address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('city')->nullable();
            $table->string('trade_license')->nullable();
            $table->boolean('is_mobile_installer')->default(0)->comment('0 => no(default), 1 => yes');
            $table->boolean('is_approved')->default(0)->comment('0 => no(default), 1 => yes');
            $table->boolean('is_free_shpping')->default(0)->comment('0 => no(default), 1 => yes');
            $table->double('discount', 10,2)->nullable();
            $table->longText('facilities')->nullable();
            $table->bigInteger('credit_days')->default(0);
            $table->double('credit_limit', 10, 2)->default(0);
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
        Schema::dropIfExists('installers');
    }
}

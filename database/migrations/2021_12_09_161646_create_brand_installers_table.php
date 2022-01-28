<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandInstallersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_installers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('installer_id')->unsigned();
            $table->double('discount', 10,2)->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('installer_id')->references('id')->on('installers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_installers');
    }
}

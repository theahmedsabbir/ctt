<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyreImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tyre_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pattern_id')->unsigned();
            $table->string('image');
            $table->integer('priority')->default(1);
            $table->timestamps();

            $table->foreign('pattern_id')->references('id')->on('patterns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tyre_images');
    }
}

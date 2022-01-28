<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profit_percentages', function (Blueprint $table) {
            $table->id();
            $table->double('greater_than', 10, 2)->unsigned()->nullable();
            $table->double('less_than', 10, 2)->unsigned()->nullable();
            $table->integer('percentage')->unsigned();
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
        Schema::dropIfExists('profit_percentages');
    }
}

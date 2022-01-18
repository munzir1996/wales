<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wells', function (Blueprint $table) {
            $table->id();
            $table->double('longitude');
            $table->double('latitude');
            $table->double('well_depth', 2);
            $table->double('packaging_depth', 2);
            $table->double('swl', 2);
            $table->double('dwl', 2);
            $table->double('productivity', 2);
            $table->double('psd', 2);
            $table->foreignId('basic_information_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('basic_information_id')->references('id')->on('basic_information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wells');
    }
}

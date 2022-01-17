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

            $table->foreignId('basic_information_id')->constrained('basic_information')->cascadeOnDelete();
            $table->softDeletes();
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
        Schema::dropIfExists('wells');
    }
}

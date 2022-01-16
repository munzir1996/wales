<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->unsignedInteger('execution_time');
            $table->string('owner');
            $table->string('advisor');
            $table->string('funded');
            $table->double('total_cost', 2);

            $table->foreignId('state_id')->constrained('states')->cascadeOnDelete();
            $table->foreignId('local_id')->constrained('locals')->cascadeOnDelete();
            $table->foreignId('region_id')->constrained('regions')->cascadeOnDelete();
            $table->foreignId('project_manager_id')->constrained('project_managers')->cascadeOnDelete();
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
        Schema::dropIfExists('basic_information');
    }
}

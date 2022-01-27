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
            $table->string('project_name');
            $table->boolean('project_status')->default(0);
            $table->unsignedInteger('execution_time');
            $table->string('owner');
            $table->string('advisor');
            $table->string('funded');
            $table->string('project_manager');
            $table->double('total_cost', 2);
            $table->foreignId('state_id');
            $table->foreignId('local_id');
            $table->foreignId('region_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('local_id')->references('id')->on('locals')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            // $table->foreign('project_manager_id')->references('id')->on('project_managers')->onDelete('cascade');
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

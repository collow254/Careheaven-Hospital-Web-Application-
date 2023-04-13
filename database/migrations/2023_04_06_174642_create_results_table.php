<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('labtechId')->nullable();
            $table->string('doctorId')->nullable();
            $table->string('patientId')->nullable();
            $table->string('visitId')->nullable();
            $table->string('result')->nullable();
            $table->string('medicine')->nullable();
            $table->string('medicinestatus')->nullable();
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
        Schema::dropIfExists('results');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrolment', function (Blueprint $table) {
            $table->id();
            $table->date('dateEnrolment');
            $table->float('curso');
            $table->unsignedBigInteger('id_estudiante');
            $table->unsignedBigInteger('id_clase');
            $table->foreign('id_estudiante')->references('id')->on('users');
            $table->foreign('id_clase')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolment');
    }
};

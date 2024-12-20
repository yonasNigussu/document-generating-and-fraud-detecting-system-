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
        Schema::create('csstdudents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('grand_father_name')->nullable();
            $table->string('id_number')->unique();
            $table->string('advanced_database')->nullable();
            $table->string('datastructure_and_algorithms')->nullable();
            $table->string('java_programming')->nullable();
            $table->string('internet_programming')->nullable();
            $table->string('software_engineering')->nullable();
            $table->string('python')->nullable();
            $table->string('computer_graphics')->nullable();
            $table->string('mobile_application_development')->nullable();
            $table->string('computer_security')->nullable();
            $table->string('compiler_design')->nullable();
            $table->string('multimedia')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('introduction_to_artificial_intelligence')->nullable();
            $table->string('linear_algebra')->nullable();
            $table->string('departement_id')->primary();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csstdudents');
    }
};

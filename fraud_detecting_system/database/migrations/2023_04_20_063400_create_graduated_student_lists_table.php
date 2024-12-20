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
        Schema::create('graduated_student_lists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->primary();
            $table->string('last_name')->nullable();
            $table->string('grand_father_name')->nullable();
            $table->string('id_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('year_of_graduation')->nullable();
            $table->string('admission_type')->nullable();
            $table->string('degree_type')->nullable();
            $table->string('college')->nullable();
            $table->string('department')->nullable();
            $table->string('gpa')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduated_student_lists');
    }
};

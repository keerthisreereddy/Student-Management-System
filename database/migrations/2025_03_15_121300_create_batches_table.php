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
        Schema::create('batches', function (Blueprint $table) {  // Fixed table name
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('course_id');
            $table->date('start_date'); // Fixed column name
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // Fixed reference
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');  // Fixed table name
    }
};
